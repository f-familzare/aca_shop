<?php

namespace App\Http\Controllers\Panel;

use App\Model\Gallery;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        Gallery::all();
        return view('Panel.Gallery.GalleryList');
    }

    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    public function destroy(Gallery $gallery,$id)
    {
        /*$product = Product::find($id);
        $gallery->product()->detach($product->id);
        if (file_exists(public_path($gallery->imgUrl))) {
            File::delete(public_path($gallery->imgUrl));
        }
        return redirect()->back();*/
    }

    public function gallery($product_id)
    {
        $product = Product::find($product_id);
        return view('Panel.Gallery.AddGallery', compact('product'));
    }

    public function upload(Request $request)
    {
        $id = $request->get('id');
        $file = $request->file('file');
        if ($request->hasFile('file')) {

            $fileName = rand(1000, 2000) . '-' . $file->getClientOriginalName();
            $root = public_path('/Upload/Gallery/');
            $file->move($root, $fileName);
        }
        $img = '/Upload/Gallery/' . $fileName;
        $gallery = Gallery::create([
            'imgUrl' => $img
        ]);
        $product = Product::find($id);
        $gallery->product()->attach($product->id);
        return redirect()->back();
    }


}
