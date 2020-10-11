<?php

namespace App\Http\Controllers\Site;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category()
    {
        return Category::with('category')->where('parent_id', 0)->limit(5)->get();
    }
    public function show(Category $category)
    {
        $categories=$this->category();
//        $products=$category->product()->paginate(1);
        return view('Shop.category',compact('category','categories'));
    }

}
