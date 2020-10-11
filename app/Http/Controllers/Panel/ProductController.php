<?php

namespace App\Http\Controllers\Panel;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class ProductController extends PanelController
{

    public function index()
    {
        $products = Product::with('category')->paginate(20);
//        $products = DB::table('products')
//            ->join('categories', 'products.category_id', '=', 'categories.id')
//            ->select('products.*','categories.category_title')->get();

        return view('Panel.Product.ProductList', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('Panel.Product.AddProduct', compact('categories'));
    }

    public function store(Request $request)
    {
        $file = $request->image;
        $path = 'Product';
        $img = $this->uploader($file, $path);
        Product::create([
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'imgUrl' => $img,
            'count' => $request->input('count'),
            'price' => $request->input('price'),
            'brand' => $request->input('brand'),
            'discount' => $request->input('discount'),
            'status' => $request->input('status'),
            'description' => $request->input('description')
        ]);
        return redirect(route('product.index'));
    }

    public function show(Product $product)
    {
        $product['category'] = Category::where('id', $product->category_id)->get();
        return $product;
    }

    public function edit(Product $product)
    {
        if (Gate::allows('edit_product')) {
            $categories = Category::all();
            return view('Panel.Product.EditProduct', compact('product', 'categories'));
        } else {
            return view('Panel.500');
        }
    }

    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($product->imgUrl));
            $file = $request->image;
            $path = 'Product';
            $img = $this->uploader($file, $path);
            $product->update(['imgUrl' => $img]);
        }
        $product->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'count' => $request->count,
            'price' => $request->price,
            'brand' => $request->brand,
            'discount' => $request->discount,
            'status' => $request->status,
            'description' => $request->description
        ]);
        return redirect(route('product.index'));
    }

    public function destroy(Product $product)
    {
        if (file_exists(public_path($product->imgUrl))) {
            File::delete(public_path($product->imgUrl));
        }
        $product->delete();
        return redirect(route('product.index'));
    }
}
