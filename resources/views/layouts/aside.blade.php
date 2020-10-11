<!-- Left Part Start-->
<aside id="column-left" class="col-sm-3 hidden-xs">
    <h3 class="subtitle">دسته ها</h3>
    <div class="box-category">
        <ul id="cat_accordion">
            @foreach($categories as $category)
                <li>
                    <a href="{{route('site.category',['category'=>$category->id])}}">{{$category->category_title}}</a>
                    <span class="down"></span>
                    <ul>
                        @foreach($category->category as $sub_category)
                            <li>
                                <a href="{{route('site.category',['category'=>$sub_category->id])}}">{{$sub_category->category_title}}</a>
                                <span class="down"></span>
                                <ul>
                                    <li><a href="category.html">زیردسته ها</a></li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <h3 class="subtitle">پرفروش ها</h3>
    <div class="side-item">
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img
                            src="/Site/image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه"
                            title="تی شرت کتان مردانه" class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                <p class="price"><span class="price-new">110000 تومان</span> <span
                            class="price-old">122000 تومان</span>
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
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
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
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
            </div>
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img
                            src="/Site/image/product/sony_vaio_1-50x50.jpg" alt="کفش راحتی مردانه"
                            title="کفش راحتی مردانه" class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                <p class="price"><span class="price-new">32000 تومان</span> <span
                            class="price-old">12 میلیون تومان</span>
                    <span class="saving">-25%</span></p>
                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
            </div>
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img
                            src="/Site/image/product/FinePix-Long-Zoom-Camera-50x50.jpg"
                            alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive"/></a>
            </div>
            <div class="caption">
                <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                <p class="price">122000 تومان</p>
            </div>
        </div>
    </div>
    <div class="banner owl-carousel">
        <div class="item"><a href="#"><img src="/Site/image/banner/small-banner1-265x350.jpg"
                                           alt="small banner" class="img-responsive"/></a></div>
        <div class="item"><a href="#"><img src="/Site/image/banner/small-banner-265x350.jpg"
                                           alt="small banner1" class="img-responsive"/></a></div>
    </div>
    <div class="list-group">
        <h3 class="subtitle">محتوای سفارشی</h3>
        <p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار
            دهید. </p>
        <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به
            پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
            موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
            است.</p>
    </div>

    <h3 class="subtitle">جدیدترین</h3>
    <div class="side-item">
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img src="/Site/image/product/iphone_6-50x50.jpg"
                                                           alt="کرم مو آقایان" title="کرم مو آقایان"
                                                           class="img-responsive"/></a></div>
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
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img
                            src="/Site/image/product/nikon_d300_5-50x50.jpg" alt="محصولات مراقبت از مو"
                            title="محصولات مراقبت از مو" class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                <p class="price"><span class="price-new">66000 تومان</span> <span
                            class="price-old">90000 تومان</span>
                    <span class="saving">-27%</span></p>
                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
            </div>
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img
                            src="/Site/image/product/nikon_d300_4-50x50.jpg" alt="کرم لخت کننده مو"
                            title="کرم لخت کننده مو" class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                <p class="price"> 88000 تومان </p>
            </div>
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img src="/Site/image/product/macbook_5-50x50.jpg"
                                                           alt="ژل حمام بانوان" title="ژل حمام بانوان"
                                                           class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">ژل حمام بانوان</a></h4>
                <p class="price"><span class="price-new">19500 تومان</span> <span
                            class="price-old">21900 تومان</span>
                    <span class="saving">-4%</span></p>
            </div>
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img src="/Site/image/product/macbook_4-50x50.jpg"
                                                           alt="عطر گوچی" title="عطر گوچی"
                                                           class="img-responsive"/></a></div>
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
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img src="/Site/image/product/macbook_3-50x50.jpg"
                                                           alt="رژ لب گارنیر" title="رژ لب گارنیر"
                                                           class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">رژ لب گارنیر</a></h4>
                <p class="price"> 123000 تومان </p>
            </div>
        </div>
        <div class="product-thumb clearfix">
            <div class="image"><a href="product.html"><img src="/Site/image/product/macbook_2-50x50.jpg"
                                                           alt="عطر نینا ریچی" title="عطر نینا ریچی"
                                                           class="img-responsive"/></a></div>
            <div class="caption">
                <h4><a href="product.html">عطر نینا ریچی</a></h4>
                <p class="price"> 110000 تومان </p>
            </div>
        </div>
    </div>
</aside>
<!-- Left Part End-->