<?php

namespace App\Http\Controllers\Site;

use App\Model\Category;
use App\Model\Product;
use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function slider()
    {
        return Slider::all();
    }

    public function category()
    {
        return Category::with('category')->where('parent_id', 0)->limit(5)->get();
    }

    public function special()
    {
        return Product::where('special', 'فعال')
            ->where('status', 'فعال')->limit(10)->get();
    }

    public function product_category()
    {

//        $categories = Category::with('category')->where('parent_id', 0)->inRandomOrder()->limit(1)->get();
//        $products=Product::where('category_id',$categories)->get();
//        return $products;
    }

//    public function product()
//    {
//        $products = $this->product_category();
//        return Product::where('category_id', $products->parent_id)->get();
//    }

    public function index()
    {
        $sliders = $this->slider();
        $categories = $this->category();
        $specials = $this->special();
        $product_categories = $this->product_category();
        return view('Shop.index', compact('sliders', 'categories', 'specials'));
    }
}
