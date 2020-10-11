<?php

namespace App\Http\Controllers\Panel;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends PanelController
{
    public function index()
    {
        $categories=Category::with('sub_category')->paginate(20);
        return view('Panel.Category.CategoryList',compact('categories'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('Panel.Category.AddCategory',compact('categories'));
    }

    public function store(Request $request)
    {
        $file=$request->image;
        $path='Category';
        $img=$this->uploader($file,$path);
        Category::create([
            'category_title' => $request->input('category_title'),
            'imgUrl' => $img,
            'parent_id' => $request->input('parent_id'),
        ]);
        return redirect(route('category.index'));
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function edit(Category $category)
    {
        $categories=Category::all();
        return view('Panel.Category.EditCategory',compact('category','categories'));
    }

    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('image')){
            File::delete(public_path($category->imgUrl));
            $file = $request->image;
            $path = 'Category';
            $img=$this->uploader($file,$path);
            $category->update(['imgUrl'=>$img]);
        }
        $category->update([
            'category_title' => $request->input('category_title'),
            'parent_id' => $request->input('parent_id'),
        ]);
        return redirect(route('category.index'));
    }


    public function destroy(Category $category)
    {
        if (public_path($category->imgUrl)){
            File::delete(public_path($category->imgUrl));
        }
        $category->delete();
        return redirect(route('category.index'));
    }
}
