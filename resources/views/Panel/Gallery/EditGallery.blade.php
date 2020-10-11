@extends('layouts.panel-master')
@section('title','ویرایش دسته بندی')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش دسته بندی {{$category->category_title}}
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('category.update',['id'=>$category->id])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسته بندی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="category_title" value="{{$category->category_title}}">
                    </div>

                    <label class="col-sm-2 control-label">نام دسته بندی :</label>
                    <div class="col-sm-4">
                        <select class="form-control round-input" name="parent_id">
                            <option value="0" selected="selected">دسته بندی مادر را انتخاب کنید ...</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}" {{$category->parent_id==$cat->id?'selected':''}}>{{$cat->category_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسته بندی :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control round-input" name="image" value="{{$category->imgUrl}}">
                    </div>

                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ویرایش</button>
                </div>
            </form>
        </div>
    </section>

@endsection
