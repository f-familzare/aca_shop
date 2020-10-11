@extends('layouts.panel-master')
@section('title','ویرایش اسلایدر')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش اسلایدر {{$slider->title}}
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('slider.update',['id'=>$slider->id])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">عنوان اسلایدر :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="title" value="{{$slider->title}}">
                    </div>

                    <label class="col-sm-2 control-label">لینک اسلایدر :</label>
                    <div class="col-sm-4">
                        <input  type="text" class="form-control round-input" name="url" value="{{$slider->url}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر اسلایدر :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control round-input" name="image" value="{{$slider->imgUrl}}">
                    </div>
                </div>
                <img src="{{$slider->imgUrl}}" alt="{{$slider->title}}" class="col-sm-6 text-center">

                <div class="text-center">
                    <button class="btn btn-round btn-primary">ویرایش</button>
                </div>
            </form>
        </div>
    </section>

@endsection
