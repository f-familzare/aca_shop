@extends('layouts.panel-master')
@section('title','ویرایش محصول')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش محصول {{$product->title}}
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام محصول :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="title" value="{{$product->title}}">
                    </div>

                    <label class="col-sm-2 control-label">دسته بندی محصول :</label>
                    <div class="col-sm-4">

                        <select class="form-control round-input" name="category_id">
                            <option selected disabled> انتخاب کنید ...</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$product->category_id==$category->id?'selected':''}}>{{$category->category_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">قیمت :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" value="{{$product->price}}" name="price">
                    </div>

                    <label class="col-sm-2 control-label">برند :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" value="{{$product->brand}}" name="brand">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر محصول :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control round-input" value="{{$product->imgUrl}}" name="image">
                    </div>
                    <label class="col-sm-2 control-label">تعداد در انبار :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" value="{{$product->count}}" name="count">
                    </div>
                    <img class="task-thumb" src="{{$product->imgUrl}}" alt="{{$product->title}}">
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تخفیف (%): </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" value="{{$product->discount}}" name="discount">
                    </div>

                    <label class="col-sm-2 control-label">وضعیت : </label>
                    <div class="col-sm-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="menuStatus1" value="فعال" {{$product->status=='فعال'?'checked':''}}>
                                فعال
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="menuStatus2" value="غیرفعال" {{$product->status=='غیرفعال'?'checked':''}}>
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
                              class="form-control col-sm-10">{{$product->description}}</textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ویرایش</button>
                </div>
            </form>
        </div>
    </section>

@endsection
