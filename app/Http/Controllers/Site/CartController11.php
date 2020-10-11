<?php

namespace App\Http\Controllers\Site;

use App\Model\Cart;
use App\Model\Product;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where([['user_id', auth()->user()->id], ['status', '=', 'پرداخت نشده']])->with('product')->get();
        $totalCost = 0;
        $baskets=Basket::where('user_id',auth()->user()->id)->where('status','0')->get();
        $sum=0;
        if(count($baskets)>0){
            foreach ($baskets as $key=>$basket) {
                $cost=$basket->price*$basket->count;
                $sum+=$cost;
            }
        }
        return view('Shop.cart', compact('carts', 'cost', 'totalCost'));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->input('id');
            $product = Product::find($id);
            if (Cart::where([['user_id', auth()->user()->id], ['product_id', $product->id], ['status', '=', 'پرداخت نشده']])->get()->count() > 0) {
                if (Cart::where([['user_id', auth()->user()->id], ['product_id', $product->id], ['status', '=', 'پرداخت نشده']])->first()->count == $product->count) {
                    return response()->json(['massage' => 'Out Of Stack']);
                } else {
                    Cart::where([['user_id', auth()->user()->id], ['product_id', $product->id], ['status', '=', 'پرداخت نشده']])->first()->increment('count');
                }
            } else {
                $totalPrice = ($product->price) - ($product->price / 100 * $product->discount);
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $product->id,
                    'total_price' => $totalPrice,
                    'total_discount' => $product->discount
                ]);
                return response()->json(['massage' => 'successful!']);
            }
        }
    }
}
