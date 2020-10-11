@extends('layouts.panel-master')
@section('title','افزودن دسته بندی')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن دسته بندی جدید
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('category.store')}}"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسته بندی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="category_title"
                               value="{{old('category_title')}}">
                    </div>

                    <label class="col-sm-2 control-label">نام دسته بندی مادر:</label>
                    <div class="col-sm-4">
                        <select class="form-control round-input" name="parent_id">
                            <option value="0" selected="selected">دسته بندی مادر</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر دسته بندی :</label>
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
