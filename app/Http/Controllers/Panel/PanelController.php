<?php

namespace App\Http\Controllers\Panel;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PanelController extends Controller
{
    public function index()
    {
        return view('Panel.dashboard');
    }

    public function uploader($file, $path)
    {
        if ($file) {
            $fileName = rand(1000, 2000) . '-' . $file->getClientOriginalName();
            $root = public_path('/Upload/') . $path . '/';
            $pic = $file->move($root, $fileName);
            $resize = Image::make($pic->getRealPath());
            $resize->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $resize->save($root . 'small' . '-' . $fileName);

            return '/Upload/' . $path . '/' . $fileName;
        }
    }


    public function search(Request $request)
    {
        if (!empty($request)){
            $categories=Category::where('category_title','like','%'.$request->q.'%')->paginate(20);
            return view('Panel.Category.CategoryList',compact('categories'));
        }
    }
}
