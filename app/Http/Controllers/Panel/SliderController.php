<?php

namespace App\Http\Controllers\Panel;

use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends PanelController
{
    public function index()
    {
        $sliders=Slider::paginate(20);
        return view('Panel.Slider.SliderList',compact('sliders'));
    }

    public function create()
    {
        return view('Panel.Slider.AddSlider');
    }

    public function store(Request $request)
    {
        $file = $request->image;
        $path = 'Slider';
        $img = $this->uploader($file, $path);
        Slider::create([
            'title' => $request->title,
            'url' => $request->url,
            'imgUrl' => $img
        ]);
        return redirect(route('slider.index'));
    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('Panel.Slider.EditSlider', compact('slider'));
    }


    public function update(Request $request, Slider $slider)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($slider->imgUrl));
            $file = $request->image;
            $path = 'Slider';
            $img = $this->uploader($file, $path);
            $slider->update(['imgUrl' => $img]);
        }

        $slider->update([
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect(route('slider.index'));
    }


    public function destroy(Slider $slider)
    {
        if (file_exists(public_path($slider->imgUrl))){
            File::delete(public_path($slider->imgUrl));
        }
        return redirect(route('slider.index'),compact('slider'));
    }

}
