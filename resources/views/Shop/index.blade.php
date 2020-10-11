@extends('layouts.master')
@section('title','فروشگاه اینترنتی')
@section('content')
    <div id="container">
        <div class="container">
            <div class="row">
            @include('layouts.aside')
            <!--Middle Part Start-->
                <div id="content" class="col-sm-9">
                    <!-- Slideshow Start-->
                    <div class="slideshow single-slider owl-carousel">
                        @foreach($sliders as $slider)
                            <div class="item"><a href="{{$slider->url}}"><img class="img-responsive"
                                                                              src="{{$slider->imgUrl}}"
                                                                              alt="{{$slider->title}}"/></a></div>
                        @endforeach
                    </div>
                    <!-- Slideshow End-->
                    <!-- Featured محصولات Start-->
                    <h3 class="subtitle">ویژه</h3>
                    <div class="owl-carousel product_carousel">
                        @foreach($specials as $special)
                            <div class="product-thumb clearfix">
                                <div class="image"><a href="{{route('site.product.show',['id'=>$special->id])}}"
                                                      target="_blank"><img
                                                src="{{$special->imgUrl}}" alt="{{$special->title}}"
                                                title="{{$special->title}}" class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4><a href="{{route('site.product.show',['id'=>$special->id])}}"
                                           target="_blank">{{$special->title}}</a></h4>

                                    <div class="price">
                                        <div class="{{$special->discount>0?'price-new':''}}">{{number_format($special->price -($special->price/100*$special->discount))}} تومان</div>
                                        @if($special->discount>0)
                                            <div class="price-old">{{number_format($special->price)}} تومان</div>
                                            <span class="saving">{{$special->discount}}%</span>
                                        @endif
                                    </div>
                                    {{--Favorits--}}
                                   {{-- <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>--}}
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary add-to-cart" data-id="{{$special->id}}">
                                        <span>افزودن به سبد</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List">
                                            <i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="مقایسه this محصولات"
                                                onClick="">
                                            <i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Featured محصولات End-->
                    <!-- Banner Start-->
                    <div class="marketshop-banner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img
                                            src="/Site/image/banner/sample-banner-3-400x200.jpg" alt="بنر نمونه 3"
                                            title="بنر نمونه 3"/></a></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img
                                            src="/Site/image/banner/sample-banner-1-400x200.jpg" alt="بنر نمونه"
                                            title="بنر نمونه"/></a></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img
                                            src="/Site/image/banner/sample-banner-2-400x200.jpg" alt="بنر نمونه 2"
                                            title="بنر نمونه 2"/></a></div>
                        </div>
                    </div>
                    <!-- Banner End-->
                    <!-- دسته ها محصولات Slider Start-->
                    <div class="category-module" id="latest_category">
                        <h3 class="subtitle">الکترونیکی - <a class="viewall" href="category.tpl">نمایش همه</a></h3>
                        <div class="category-module-content">
                            <ul id="sub-cat" class="tabs">
                                <li><a href="#tab-cat1">لپ تاپ</a></li>
                                <li><a href="#tab-cat2">رومیزی</a></li>
                                <li><a href="#tab-cat3">دوربین</a></li>
                                <li><a href="#tab-cat4">موبایل و تبلت</a></li>
                                <li><a href="#tab-cat5">صوتی و تصویری</a></li>
                                <li><a href="#tab-cat6">لوازم خانگی</a></li>
                            </ul>
                            <div id="tab-cat1" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/samsung_tab_1-200x200.jpg"
                                                        alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">تبلت ایسر</a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">240000 تومان</span> <span
                                                        class="saving">-5%</span></p>
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
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/macbook_pro_1-200x200.jpg"
                                                        alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">120000 تومان</span> <span
                                                        class="saving">-26%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/macbook_air_1-200x200.jpg"
                                                        alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                            <p class="price"><span class="price-new">10 میلیون تومان</span> <span
                                                        class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/macbook_1-200x200.jpg"
                                                        alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                            <p class="price"> 900000 تومان </p>
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
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_shuffle_1-200x200.jpg"
                                                        alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_touch_1-200x200.jpg"
                                                        alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                            <p class="price"><span class="price-new">62000 تومان</span> <span
                                                        class="price-old">122000 تومان</span> <span
                                                        class="saving">-50%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat2" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_shuffle_1-200x200.jpg"
                                                        alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat3" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/FinePix-Long-Zoom-Camera-200x200.jpg"
                                                        alt="دوربین فاین پیکس" title="دوربین فاین پیکس"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/nikon_d300_1-200x200.jpg"
                                                        alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                            <p class="price"><span class="price-new">92000 تومان</span> <span
                                                        class="price-old">98000 تومان</span> <span
                                                        class="saving">-6%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat4" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/samsung_tab_1-200x200.jpg"
                                                        alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">تبلت ایسر</a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">240000 تومان</span> <span
                                                        class="saving">-5%</span></p>
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
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/iphone_1-200x200.jpg" alt="آیفون 7"
                                                        title="آیفون 7" class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیفون 7</a></h4>
                                            <p class="price"> 2200000 تومان </p>
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
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_touch_1-200x200.jpg"
                                                        alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                            <p class="price"><span class="price-new">62000 تومان</span> <span
                                                        class="price-old">122000 تومان</span> <span
                                                        class="saving">-50%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/palm_treo_pro_1-200x200.jpg"
                                                        alt="موبایل HTC M7" title="موبایل HTC M7"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">موبایل HTC M7</a></h4>
                                            <p class="price"> 377000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat5" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/samsung_tab_1-200x200.jpg"
                                                        alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">تبلت ایسر</a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">240000 تومان</span> <span
                                                        class="saving">-5%</span></p>
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
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_classic_1-200x200.jpg"
                                                        alt="آیپاد نسل 5" title="آیپاد نسل 5"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/macbook_pro_1-200x200.jpg"
                                                        alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">120000 تومان</span> <span
                                                        class="saving">-26%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/macbook_air_1-200x200.jpg"
                                                        alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                            <p class="price"><span class="price-new">10 میلیون تومان</span> <span
                                                        class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/macbook_1-200x200.jpg"
                                                        alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                            <p class="price"> 900000 تومان </p>
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
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_nano_1-200x200.jpg"
                                                        alt="پخش کننده موزیک" title="پخش کننده موزیک"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">پخش کننده موزیک</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/FinePix-Long-Zoom-Camera-200x200.jpg"
                                                        alt="دوربین فاین پیکس" title="دوربین فاین پیکس"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_shuffle_1-200x200.jpg"
                                                        alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('34');"><span>افزودن به سبد</span>
                                            </button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick="wishlist.add('34');"><i class="fa fa-heart"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick="compare.add('34');"><i class="fa fa-exchange"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_touch_1-200x200.jpg"
                                                        alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                            <p class="price"><span class="price-new">62000 تومان</span> <span
                                                        class="price-old">122000 تومان</span> <span
                                                        class="saving">-50%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/nikon_d300_1-200x200.jpg"
                                                        alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                            <p class="price"><span class="price-new">92000 تومان</span> <span
                                                        class="price-old">98000 تومان</span> <span
                                                        class="saving">-6%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat6" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_classic_1-200x200.jpg"
                                                        alt="آیپاد نسل 5" title="آیپاد نسل 5"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('48');"><span>افزودن به سبد</span>
                                            </button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="/Site/image/product/ipod_nano_1-200x200.jpg"
                                                        alt="پخش کننده موزیک" title="پخش کننده موزیک"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">پخش کننده موزیک</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- دسته ها محصولات Slider End-->
                    <!-- Banner Start -->
                    <div class="marketshop-banner">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img
                                            src="/Site/image/banner/sample-banner-4-400x150.jpg" alt="2 Block Banner"
                                            title="2 Block Banner"/></a></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img
                                            src="/Site/image/banner/sample-banner-5-400x150.jpg" alt="2 Block Banner 1"
                                            title="2 Block Banner 1"/></a></div>
                        </div>
                    </div>
                    <!-- Banner End -->
                    <!-- دسته ها محصولات Slider Start -->
                    <h3 class="subtitle">زیبایی و سلامت - <a class="viewall" href="category.html">نمایش همه</a></h3>
                    <div class="owl-carousel latest_category_carousel">
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/iphone_6-200x200.jpg" alt="کرم مو آقایان"
                                            title="کرم مو آقایان" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کرم مو آقایان</a></h4>
                                <p class="price"> 42300 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/nikon_d300_5-200x200.jpg"
                                            alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                                <p class="price"><span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span>
                                    <span class="saving">-27%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/nikon_d300_4-200x200.jpg" alt="کرم لخت کننده مو"
                                            title="کرم لخت کننده مو" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                                <p class="price"> 88000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href=""><img src="/Site/image/product/macbook_5-200x200.jpg"
                                                               alt="ژل حمام بانوان" title="ژل حمام بانوان"
                                                               class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">ژل حمام بانوان</a></h4>
                                <p class="price"><span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span>
                                    <span class="saving">-4%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('61');">
                                    <span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی"
                                            onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه"
                                            onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_4-200x200.jpg" alt="عطر گوچی"
                                            title="عطر گوچی" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">عطر گوچی</a></h4>
                                <p class="price"> 85000 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_3-200x200.jpg" alt="رژ لب گارنیر"
                                            title="رژ لب گارنیر" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">رژ لب گارنیر</a></h4>
                                <p class="price"> 123000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_2-200x200.jpg" alt="عطر نینا ریچی"
                                            title="عطر نینا ریچی" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">عطر نینا ریچی</a></h4>
                                <p class="price"> 110000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- دسته ها محصولات Slider End -->
                    <!-- Brand محصولات Slider Start-->
                    <h3 class="subtitle">اپل - <a class="viewall" href="category.html">نمایش همه</a></h3>
                    <div class="owl-carousel latest_brands_carousel">
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/iphone_6-200x200.jpg" alt="کرم مو آقایان"
                                            title="کرم مو آقایان" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کرم مو آقایان</a></h4>
                                <p class="price"> 42300 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/nikon_d300_5-200x200.jpg"
                                            alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                                <p class="price"><span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span>
                                    <span class="saving">-27%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/nikon_d300_4-200x200.jpg" alt="کرم لخت کننده مو"
                                            title="کرم لخت کننده مو" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                                <p class="price"> 88000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_5-200x200.jpg" alt="ژل حمام بانوان"
                                            title="ژل حمام بانوان" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">ژل حمام بانوان</a></h4>
                                <p class="price"><span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span>
                                    <span class="saving">-4%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_4-200x200.jpg" alt="عطر گوچی"
                                            title="عطر گوچی" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">عطر گوچی</a></h4>
                                <p class="price"> 85000 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_3-200x200.jpg" alt="رژ لب گارنیر"
                                            title="رژ لب گارنیر" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">رژ لب گارنیر</a></h4>
                                <p class="price"> 123000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_2-200x200.jpg" alt="عطر نینا ریچی"
                                            title="عطر نینا ریچی" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">عطر نینا ریچی</a></h4>
                                <p class="price"> 110000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="/Site/image/product/hp_3-200x200.jpg"
                                                                           alt="ساعت کاسیو سری Youth"
                                                                           title="ساعت کاسیو سری Youth"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">ساعت کاسیو سری Youth</a></h4>
                                <p class="price"> 1.5 میلیون تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="/Site/image/product/hp_2-200x200.jpg"
                                                                           alt="ساعت بند چرمی" title="ساعت بند چرمی"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">ساعت بند چرمی</a></h4>
                                <p class="price"> 180000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5"
                                            title="آیپاد نسل 5" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                <p class="price"> 122000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_pro_1-200x200.jpg"
                                            alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                <p class="price"><span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span>
                                    <span class="saving">-26%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور"
                                            title="لپ تاپ ایلین ور" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                <p class="price"><span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span>
                                    <span class="saving">-5%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Brand محصولات Slider End -->
                    <!-- Brand Logo Carousel Start-->
                    <div id="carousel" class="owl-carousel nxt">
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/apple_logo-100x100.jpg"
                                                                       alt="پالم" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/canon_logo-100x100.jpg"
                                                                       alt="سونی" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/apple_logo-100x100.jpg"
                                                                       alt="کنون" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/canon_logo-100x100.jpg"
                                                                       alt="اپل" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/apple_logo-100x100.jpg"
                                                                       alt="اچ تی سی" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/canon_logo-100x100.jpg"
                                                                       alt="اچ پی" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/apple_logo-100x100.jpg"
                                                                       alt="brand" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img src="/Site/image/product/canon_logo-100x100.jpg"
                                                                       alt="brand1" class="img-responsive"/></a></div>
                    </div>
                    <!-- Brand Logo Carousel End -->
                </div>
                <!--Middle Part End-->
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{--<script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        $('.add-to-cart').onClick(function () {
            $.ajax({
                url:'/product/add',
                type:'post',
                dataType:'json',
                data:[],
            })
        })
    </script>--}}
@endsection