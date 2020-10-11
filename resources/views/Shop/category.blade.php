@extends('layouts.master')
@section('title','دسته بندی')
@section('content')
    <div id="container">
        <div class="container">
            <div class="row">
            @include('layouts.aside')
            <!--Middle Part Start-->
                <div id="content" class="col-sm-9">
                    <h1 class="title">{{$category->category_title}}</h1>
                    <div class="product-filter">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="btn-group">
                                    <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                            title="List"><i class="fa fa-th-list"></i></button>
                                    <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                            title="Grid"><i class="fa fa-th"></i></button>
                                </div>
                                <a href="compare.html" id="compare-total">محصولات مقایسه (0)</a></div>
                            <div class="col-sm-2 text-right">
                                <label class="control-label" for="input-sort">مرتب سازی :</label>
                            </div>
                            <div class="col-md-3 col-sm-2 text-right">
                                <select id="input-sort" class="form-control col-sm-3">
                                    <option value="" selected="selected">پیشفرض</option>
                                    <option value="">نام (الف - ی)</option>
                                    <option value="">نام (ی - الف)</option>
                                    <option value="">قیمت (کم به زیاد)</option>
                                    <option value="">قیمت (زیاد به کم)</option>
                                    <option value="">امتیاز (بیشترین)</option>
                                    <option value="">امتیاز (کمترین)</option>
                                </select>
                            </div>
                            <div class="col-sm-1 text-right">
                                <label class="control-label" for="input-limit">نمایش :</label>
                            </div>
                            <div class="col-sm-2 text-right">
                                <select id="input-limit" class="form-control">
                                    <option value="" selected="selected">20</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row products-category">
                        @foreach($category->product as $product)
                            <div class="product-layout product-list col-xs-12">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img
                                                    src="{{$product->imgUrl}}" alt="{{$product->title}}"
                                                    title="تبلت ایسر" class="img-responsive"/></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="product.html">{{$product->title}}</a></h4>
                                            <p class="description">باریک ترین تبلت دنیا با عمر باطری بسیار بالا و کاربرد
                                                در انواع فعالیت های روزانه.</p>

                                            <p class="price">

                                                <span class="{{$product->discount>0?'price-new':''}}">{{number_format($product->price -($product->price/100*$product->discount))}} تومان</span>
                                                @if($product->discount>0)
                                                    <span class="price-old">{{number_format($product->price)}} تومان</span>
                                                    <span class="saving">{{$product->discount}}%</span>
                                                @endif
                                            </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip"
                                                        title="افزودن به علاقه مندی ها" onClick=""><i
                                                            class="fa fa-heart"></i>
                                                    <span>افزودن به علاقه مندی ها</span></button>
                                                <button type="button" data-toggle="tooltip" title="مقایسه این محصول"
                                                        onClick=""><i class="fa fa-exchange"></i>
                                                    <span>مقایسه این محصول</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="row">
{{--                    {{$products->links()}}--}}
                    <div class="col-sm-6 text-right">نمایش 1 تا 12 از 15 (مجموع 2 صفحه)</div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection