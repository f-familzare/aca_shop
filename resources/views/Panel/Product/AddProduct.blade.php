@extends('layouts.panel-master')
@section('title','افزودن محصول')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن محصول جدید
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام محصول :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="title" value="{{old('title')}}">
                    </div>

                    <label class="col-sm-2 control-label">دسته بندی محصول :</label>
                    <div class="col-sm-4">

                        <select class="form-control round-input" name="category_id">
                            <option selected disabled> انتخاب کنید ...</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">قیمت :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="price" value="{{old('price')}}">
                    </div>

                    <label class="col-sm-2 control-label">برند :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="brand" value="{{old('brand')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر محصول :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control round-input" name="image">
                    </div>
                    <label class="col-sm-2 control-label">تعداد در انبار :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="count"  value="{{old('count')}}">
                    </div>
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تخفیف (%): </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="discount" value="{{old('discount')}}">
                    </div>

                    <label class="col-sm-2 control-label">وضعیت : </label>
                    <div class="col-sm-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="menuStatus1" value="فعال" checked>
                                فعال
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="menuStatus2" value="غیرفعال">
                                غیرفعال
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">توضیحات : </label>
                </div>
                <div class="form-group">
                    <textarea name="description" id="text" cols="30" rows="10"
                              class="form-control col-sm-10">{{old('description')}}</textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </section>

@endsection
