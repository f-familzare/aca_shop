@extends('layouts.panel-master')
@section('title','افزودن اسلایدر')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن اسلایدر جدید
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('slider.store')}}"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">عنوان اسلایدر :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="title"
                               value="{{old('title')}}">
                    </div>

                    <label class="col-sm-2 control-label">لینک اسلایدر :</label>
                    <div class="col-sm-4">
                        <input  type="text" class="form-control round-input" name="url" value="{{old('url')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر اسلایدر :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control round-input" name="image">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </section>

@endsection
