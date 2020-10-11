<?php

namespace App\Http\Controllers\Site;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends SiteController
{
    public function index()
    {
        $products = Product::paginate(15);
        return view('Shop.category', compact('products'));
    }

    public function show(Product $product)
    {
        $sameProducts = Product::where('category_id', '=', $product->category_id)
        ->orWhere('title', 'like', '%' . $product->title . '%')->inRandomOrder()->limit(6)->get();
        $specials = $this->special();
        return view('Shop.product', compact('product', 'sameProducts','specials'));
    }



}
