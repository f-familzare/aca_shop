@extends('layouts.master')
@section('title','محصول')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" itemprop="url"><span
                                itemprop="title"><i class="fa fa-home"></i></span></a></li>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="category.html"
                                                                                  itemprop="url"><span
                                itemprop="title">الکترونیکی</span></a></li>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="product.html"
                                                                                  itemprop="url"><span
                                itemprop="title">{{$product->title}}</span></a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-9">
                    <div itemscope itemtype="http://schema.org/محصولات">
                        <h1 class="title" itemprop="name">{{$product->title}}</h1>
                        <div class="row product-info">
                            <div class="col-sm-6">
                                <div class="image"><img class="img-responsive" itemprop="image" id="zoom_01"
                                                        src="{{$product->imgUrl}}"
                                                        title="{{$product->title}}" alt="{{$product->title}}"
                                                        data-zoom-image="/Site/image/product/macbook_air_1-500x500.jpg"/>
                                </div>
                                <div class="center-block text-center"><span class="zoom-gallery"><i
                                                class="fa fa-search"></i> برای مشاهده گالری روی تصویر کلیک کنید</span>
                                </div>
                                <div class="image-additional" id="gallery_01"><a class="thumbnail" href="#"
                                                                                 data-zoom-image="/Site/image/product/macbook_air_1-500x500.jpg"
                                                                                 data-image="/Site/image/product/macbook_air_1-350x350.jpg"
                                                                                 title="{{$product->title}}"> <img
                                                src="/Site/image/product/macbook_air_1-66x66.jpg"
                                                title="{{$product->title}}"
                                                alt="{{$product->title}}"/></a> <a class="thumbnail" href="#"
                                                                                   data-zoom-image="/Site/image/product/macbook_air_4-500x500.jpg"
                                                                                   data-image="/Site/image/product/macbook_air_4-350x350.jpg"
                                                                                   title="{{$product->title}}"><img
                                                src="/Site/image/product/macbook_air_4-66x66.jpg"
                                                title="{{$product->title}}"
                                                alt="{{$product->title}}"/></a> <a class="thumbnail" href="#"
                                                                                   data-zoom-image="/Site/image/product/macbook_air_2-500x500.jpg"
                                                                                   data-image="/Site/image/product/macbook_air_2-350x350.jpg"
                                                                                   title="{{$product->title}}"><img
                                                src="/Site/image/product/macbook_air_2-66x66.jpg"
                                                title="{{$product->title}}"
                                                alt="{{$product->title}}"/></a> <a class="thumbnail" href="#"
                                                                                   data-zoom-image="/Site/image/product/macbook_air_3-500x500.jpg"
                                                                                   data-image="/Site/image/product/macbook_air_3-350x350.jpg"
                                                                                   title="{{$product->title}}"><img
                                                src="/Site/image/product/macbook_air_3-66x66.jpg"
                                                title="{{$product->title}}"
                                                alt="{{$product->title}}"/></a></div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled description">
                                    <li><b>برند :</b> <a href="#"><span itemprop="brand">{{$product->brand}}</span></a>
                                    </li>
                                    <li><b>کد محصول :</b> <span itemprop="mpn">محصول {{$product->id}}</span></li>
                                    {{--                                    <li><b>امتیازات خرید:</b> {{$product->score}}</li>--}}
                                    <li><b>وضعیت موجودی :</b> <span
                                                class="{{$product->count==0?'nostock':'instock'}}">{{$product->count==0?'ناموجود':'موجود'}}</span>
                                    </li>
                                </ul>
                                <ul class="price-box">
                                    <li class="price" itemprop="offers" itemscope
                                        itemtype="http://schema.org/Offer">
                                        @if($product->discount>0)
                                            <span class="price-old">{{number_format($product->price)}} تومان</span>
                                            <span itemprop="price">{{number_format($product->price -($product->price/100*$product->discount))}} تومان <span
                                                        itemprop="availability" content="موجود"></span>
                                            </span>
                                        @else
                                            <span itemprop="price">{{number_format($product->price)}} تومان <span
                                                        itemprop="availability" content="موجود"></span>
                                            </span>
                                        @endif
                                    </li>
                                    <li></li>
                                </ul>
                                <div id="product">
                                    <h3 class="subtitle">انتخاب های در دسترس</h3>
                                    <div class="form-group required">
                                        <label class="control-label">رنگ</label>
                                        <select class="form-control" id="input-option200" name="option[200]">
                                            <option value=""> --- لطفا انتخاب کنید ---</option>
                                            <option value="4">مشکی</option>
                                            <option value="3">نقره ای</option>
                                            <option value="1">سبز</option>
                                            <option value="2">آبی</option>
                                        </select>
                                    </div>
                                    <div class="cart">
                                        <div>
                                            <div class="qty">
                                                <label class="control-label" for="input-quantity">تعداد</label>
                                                <input type="text" name="quantity" value="1" size="2"
                                                       id="input-quantity"
                                                       class="form-control"/>
                                                <a class="qtyBtn plus" href="javascript:void(0);">+</a><br/>
                                                <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                                                <div class="clear"></div>
                                            </div>
                                            <button type="button" id="button-cart" class="btn btn-primary btn-lg add-to-cart" data-id="{{$product->id}}">
                                                افزودن به سبد
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" class="wishlist" onClick=""><i
                                                        class="fa fa-heart"></i>
                                                افزودن به علاقه مندی ها
                                            </button>
                                            <br/>
                                            <button type="button" class="wishlist" onClick=""><i
                                                        class="fa fa-exchange"></i>
                                                مقایسه این محصول
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating" itemprop="aggregateRating" itemscope
                                     itemtype="http://schema.org/AggregateRating">
                                    <meta itemprop="ratingValue" content="0"/>
                                    <p><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <a
                                                onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;"
                                                href=""><span itemprop="reviewCount">1 بررسی</span></a> / <a
                                                onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;"
                                                href="">یک بررسی بنویسید</a></p>
                                </div>
                                <hr>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style"><a
                                            class="addthis_button_facebook_like"
                                            fb:like:layout="button_count"></a> <a
                                            class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone"
                                                                                 g:plusone:size="medium"></a> <a
                                            class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"
                                            pi:pinit:url="http://www.addthis.com/features/pinterest"
                                            pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a>
                                    <a class="addthis_counter addthis_pill_style"></a></div>
                                <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-description" data-toggle="tab">توضیحات</a></li>
                            <li><a href="#tab-specification" data-toggle="tab">مشخصات</a></li>
                            <li><a href="#tab-review" data-toggle="tab">بررسی (2)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div itemprop="description" id="tab-description" class="tab-pane active">
                                <div>
                                    <p><b>پردازشگر اینتل core i7</b></p>
                                    <p>مک بوک جدید با پردازشگر اینتل core i7 از همیشه سریعتر ظاهر شده و آماده است که گوی
                                        سبقت را از رقبا بگیرد.</p>
                                    <p><b>16 گیگابایت رم و هارد دیسک های بزرگتر</b></p>
                                    <p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                        دستاوردهای
                                        اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                        گیرد.</p>
                                    <p><b>طراحی خارق العاده و بی نظیر</b></p>
                                    <p>مک بوک در واقع ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                                        حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا
                                        مورد
                                        استفاده قرار گیرد.</p>
                                    <p><b>با دوربین i-Sight درون ساخت</b></p>
                                    <p>بدون نیاز به ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                                        حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا
                                        مورد
                                        استفاده قرار گیرد.</p>
                                </div>
                            </div>
                            <div id="tab-specification" class="tab-pane">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="2"><strong>حافظه</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>تست 1</td>
                                        <td>8gb</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="2"><strong>پردازشگر</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>تعداد هسته</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab-review" class="tab-pane">
                                <form class="form-horizontal">
                                    <div id="review">
                                        <div>
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong><span>هاروی</span></strong></td>
                                                    <td class="text-right"><span>1395/1/20</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                                            وزمان
                                                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات
                                                            پیوسته
                                                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong><span>اندرسون</span></strong></td>
                                                    <td class="text-right"><span>1395/1/20</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                                            وزمان
                                                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات
                                                            پیوسته
                                                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span
                                                                    class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2>یک بررسی بنویسید</h2>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label for="input-name" class="control-label">نام شما</label>
                                            <input type="text" class="form-control" id="input-name" value=""
                                                   name="name">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label for="input-review" class="control-label">بررسی شما</label>
                                            <textarea class="form-control" id="input-review" rows="5"
                                                      name="text"></textarea>
                                            <div class="help-block"><span class="text-danger">توجه :</span> HTML
                                                بازگردانی
                                                نخواهد شد!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label">رتبه</label>
                                            &nbsp;&nbsp;&nbsp; بد&nbsp;
                                            <input type="radio" value="1" name="rating">
                                            &nbsp;
                                            <input type="radio" value="2" name="rating">
                                            &nbsp;
                                            <input type="radio" value="3" name="rating">
                                            &nbsp;
                                            <input type="radio" value="4" name="rating">
                                            &nbsp;
                                            <input type="radio" value="5" name="rating">
                                            &nbsp;خوب
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <button class="btn btn-primary" id="button-review" type="button">ادامه
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h3 class="subtitle">محصولات مرتبط</h3>
                        <div class="owl-carousel related_pro">
                            @foreach($sameProducts as $sameProduct)
                                <div class="product-thumb clearfix">
                                    <div class="image"><a href="{{route('site.product.show',['id'=>$sameProduct->id])}}"
                                                          target="_blank"><img
                                                    src="{{$sameProduct->imgUrl}}" alt="{{$sameProduct->title}}"
                                                    title="{{$sameProduct->title}}" class="img-responsive"/></a></div>
                                    <div class="caption">
                                        <h4><a href="{{route('site.product.show',['id'=>$sameProduct->id])}}"
                                               target="_blank">{{$sameProduct->title}}</a></h4>

                                        <div class="price">
                                            <div class="{{$sameProduct->discount>0?'price-new':''}}">{{number_format($sameProduct->price -($sameProduct->price/100*$sameProduct->discount))}} تومان</div>
                                            @if($sameProduct->discount>0)
                                                <div class="price-old">{{number_format($sameProduct->price)}} تومان </div>
                                                <span class="saving">{{$sameProduct->discount}}%</span>
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
                                        <button class="btn-primary add-to-cart" data-id="{{$sameProduct->id}}">
                                            <span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                    onClick="">
                                                <i
                                                        class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="مقایسه this محصولات"
                                                    onClick="">
                                                <i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--Middle Part End -->
                <!--Right Part Start -->
                <aside id="column-right" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle">پرفروش ها</h3>
                    <div class="side-item">
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/apple_cinema_30-50x50.jpg"
                                            alt="تی شرت کتان مردانه"
                                            title="تی شرت کتان مردانه"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                                <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span>
                                    <span class="saving">-10%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="/Site/image/product/iphone_1-50x50.jpg"
                                                                           alt="آیفون 7" title="آیفون 7"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">آیفون 7</a></h4>
                                <p class="price"> 2200000 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="/Site/image/product/macbook_1-50x50.jpg"
                                                                           alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                <p class="price"> 900000 تومان </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/sony_vaio_1-50x50.jpg"
                                            alt="کفش راحتی مردانه"
                                            title="کفش راحتی مردانه"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                                <p class="price"><span class="price-new">32000 تومان</span> <span class="price-old">12 میلیون تومان</span>
                                    <span class="saving">-25%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/FinePix-Long-Zoom-Camera-50x50.jpg"
                                            alt="دوربین فاین پیکس"
                                            title="دوربین فاین پیکس" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                <p class="price">122000 تومان</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group">
                        <h3 class="subtitle">محتوای سفارشی</h3>
                        <p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار
                            دهید. </p>
                        <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به
                            پایان
                            رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                            طراحی
                            اساسا مورد استفاده قرار گیرد. </p>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <h3 class="subtitle">ویژه</h3>
                    <div class="side-item">
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_pro_1-50x50.jpg"
                                            alt=" کتاب آموزش باغبانی "
                                            title=" کتاب آموزش باغبانی "
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">کتاب آموزش باغبانی</a></h4>
                                <p class="price"><span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span>
                                    <span class="saving">-26%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/samsung_tab_1-50x50.jpg"
                                            alt="تبلت ایسر" title="تبلت ایسر"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">تبلت ایسر</a></h4>
                                <p class="price"><span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span>
                                    <span class="saving">-5%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/apple_cinema_30-50x50.jpg"
                                            alt="تی شرت کتان مردانه"
                                            title="تی شرت کتان مردانه"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4>
                                    <a href="http://demo.harnishdesign.net/opencart/marketshop/v1/index.php?route=product/product&amp;product_id=42">تی
                                        شرت کتان مردانه</a></h4>
                                <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span>
                                    <span class="saving">-10%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/nikon_d300_1-50x50.jpg"
                                            alt="دوربین دیجیتال حرفه ای"
                                            title="دوربین دیجیتال حرفه ای"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                <p class="price"><span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span>
                                    <span class="saving">-6%</span></p>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/nikon_d300_5-50x50.jpg"
                                            alt="محصولات مراقبت از مو"
                                            title="محصولات مراقبت از مو"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                                <p class="price"><span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span>
                                    <span class="saving">-27%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                            src="/Site/image/product/macbook_air_1-50x50.jpg"
                                            alt="{{$product->title}}" title="{{$product->title}}"
                                            class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">{{$product->title}}</a></h4>
                                <p class="price"><span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span>
                                    <span class="saving">-5%</span></p>
                            </div>
                        </div>
                    </div>
                </aside>
                <!--Right Part End -->
            </div>
        </div>
    </div>
@endsection