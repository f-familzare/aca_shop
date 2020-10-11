<!DOCTYPE html>
<html dir="rtl">
<head>
    {{--CSRF Tokens & JavaScript In Laravel - Ajax In ShoppingCart--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/Site/image/favicon.png" rel="icon"/>
    <title>@yield('title') - مارکت شاپ</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- JS Part Start-->
    <script type="text/javascript" src="/Site/js/jquery-2.1.1.min.js"></script>
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="/Site/js/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/js/bootstrap/css/bootstrap-rtl.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/owl.transitions.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/stylesheet-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="/Site/css/responsive-rtl.css"/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
@yield('style')

<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"><span class="drop-icon visible-sm visible-xs"><i
                                class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a>
                                </li>
                                <li><a href="#">لیست علاقه مندی (0)</a></li>
                                <li><a href="checkout.html">تسویه حساب</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            @if(auth()->check())
                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        {{csrf_field()}}
                                        <button class="logout">خروج</button>
                                    </form>
                                </li>
                                <li>
                                    <a href="{{auth()->user()->level=='admin'?route('panel'):route('user')}}"
                                       target="_blank">ورود به پنل</a>
                                </li>
                            @else
                                <li><a href="{{route('login')}}">ورود</a></li>
                                <li><a href="{{route('register')}}">ثبت نام</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="{{route('home')}}"><img class="img-responsive" src="/Site/image/logo.png"
                                                                 title="MarketShop" alt="MarketShop"/></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" class="heading dropdown-toggle">
                                <a href="{{route('cart')}}" target="_blank"><i class="cart-icon pull-left"></i></a>
                                <span id="cart-total">2 آیتم - 132000 تومان</span>
                            </button>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو"
                                   class="form-control input-lg"/>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>

                            <div class="auto-complete">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <div class="container">
            <nav id="menu" class="navbar">
                <div class="navbar-header"><span class="visible-xs visible-sm"> منو <b></b></span></div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="index.html"><span>خانه</span></a></li>
                        <li class="mega-menu dropdown"><a>دسته ها</a>
                            <div class="dropdown-menu">
                                <div class="column col-lg-2 col-md-3"><a href="category.html">البسه</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">آقایان <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته ها</a></li>
                                                        <li><a href="category.html">زیردسته ها</a></li>
                                                        <li><a href="category.html">زیردسته ها</a></li>
                                                        <li><a href="category.html">زیردسته ها</a></li>
                                                        <li><a href="category.html">زیردسته جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">بانوان</a></li>
                                            <li><a href="category.html">دخترانه<span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته ها </a></li>
                                                        <li><a href="category.html">زیردسته جدید</a></li>
                                                        <li><a href="category.html">زیردسته جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">پسرانه</a></li>
                                            <li><a href="category.html">نوزاد</a></li>
                                            <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">الکترونیکی</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">لپ تاپ <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید </a></li>
                                                        <li><a href="category.html">زیردسته های جدید </a></li>
                                                        <li><a href="category.html">زیردسته جدید </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">رومیزی <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید </a></li>
                                                        <li><a href="category.html">زیردسته جدید </a></li>
                                                        <li><a href="category.html">زیردسته جدید </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">دوربین <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">موبایل و تبلت <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">صوتی و تصویری <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید </a></li>
                                                        <li><a href="category.html">زیردسته جدید </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">لوازم خانگی</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">کفش</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">آقایان</a></li>
                                            <li><a href="category.html">بانوان <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید </a></li>
                                                        <li><a href="category.html">زیردسته ها </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">دخترانه</a></li>
                                            <li><a href="category.html">پسرانه</a></li>
                                            <li><a href="category.html">نوزاد</a></li>
                                            <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                        <li><a href="category.html">زیردسته ها</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">ساعت</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">ساعت مردانه</a></li>
                                            <li><a href="category.html">ساعت زنانه</a></li>
                                            <li><a href="category.html">ساعت بچگانه</a></li>
                                            <li><a href="category.html">لوازم</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">جواهرات</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">نقره <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">طلا <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">تست 1</a></li>
                                                        <li><a href="category.html">تست 2</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">الماس</a></li>
                                            <li><a href="category.html">مروارید <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">زیورآلات آقایان</a></li>
                                            <li><a href="category.html">زیورآلات کودکان <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">زیردسته های جدید </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">زیبایی و سلامت</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">عطر و ادکلن</a></li>
                                            <li><a href="category.html">آرایشی</a></li>
                                            <li><a href="category.html">ضد آفتاب</a></li>
                                            <li><a href="category.html">مراقبت از پوست</a></li>
                                            <li><a href="category.html">مراقبت از چشم</a></li>
                                            <li><a href="category.html">مراقبت از مو</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">کودک و نوزاد</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">اسباب بازی</a></li>
                                            <li><a href="category.html">بازی <span>&rsaquo;</span></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="category.html">تست 25</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="category.html">پازل</a></li>
                                            <li><a href="category.html">سرگرمی</a></li>
                                            <li><a href="category.html">متنوع</a></li>
                                            <li><a href="category.html">سلامت و امنیت</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">ورزشی</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">دوچرخه سواری</a></li>
                                            <li><a href="category.html">دویدن</a></li>
                                            <li><a href="category.html">شنا</a></li>
                                            <li><a href="category.html">فوتبال</a></li>
                                            <li><a href="category.html">گلف</a></li>
                                            <li><a href="category.html">موج سواری</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">خانه و باغچه</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">لوازم خواب</a></li>
                                            <li><a href="category.html">خوراک</a></li>
                                            <li><a href="category.html">لوازم منزل</a></li>
                                            <li><a href="category.html">آشپزخانه</a></li>
                                            <li><a href="category.html">روشنایی</a></li>
                                            <li><a href="category.html">ابزارها</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column col-lg-2 col-md-3"><a href="category.html">خوراک</a>
                                    <div>
                                        <ul>
                                            <li><a href="category.html">نوشیدنی</a></li>
                                            <li><a href="category.html">تنقلات</a></li>
                                            <li><a href="category.html">میان وعده</a></li>
                                            <li><a href="category.html">خشک بار</a></li>
                                            <li><a href="category.html">شکلات</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/apple_logo-60x60.jpg" title="اپل"
                                                alt="اپل"/></a><a href="#">اپل</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون"/></a><a
                                            href="#">کنون</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی"/></a><a
                                            href="#">اچ پی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/htc_logo-60x60.jpg" title="اچ تی سی"
                                                alt="اچ تی سی"/></a><a href="#">اچ تی سی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم"/></a><a
                                            href="#">پالم</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی"/></a><a
                                            href="#">سونی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/canon_logo-60x60.jpg" title="test" alt="test"/></a><a
                                            href="#">test</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/apple_logo-60x60.jpg" title="test 3"
                                                alt="test 3"/></a><a href="#">test 3</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/canon_logo-60x60.jpg" title="test 5"
                                                alt="test 5"/></a><a href="#">test 5</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/canon_logo-60x60.jpg" title="test 6"
                                                alt="test 6"/></a><a href="#">test 6</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/apple_logo-60x60.jpg" title="test 7"
                                                alt="test 7"/></a><a href="#">test 7</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/canon_logo-60x60.jpg" title="test1"
                                                alt="test1"/></a><a href="#">test1</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                                src="/Site/image/product/apple_logo-60x60.jpg" title="test2"
                                                alt="test2"/></a><a href="#">test2</a></div>
                            </div>
                        </li>
                        <li class="custom-link"><a href="#">لینک های دلخواه</a></li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                            <div class="dropdown-menu custom_block">
                                <ul>
                                    <li>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="/Site/image/banner/cms-block.jpg"></td>
                                                <td><img alt="" src="/Site/image/banner/responsive.jpg"></td>
                                                <td><img alt="" src="/Site/image/banner/cms-block.jpg"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>بلاک های محتوا</h4></td>
                                                <td><h4>قالب واکنش گرا</h4></td>
                                                <td><h4>پشتیبانی ویژه</h4></td>
                                            </tr>
                                            <tr>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری
                                                    یا تصویری را در آن قرار دهید.
                                                </td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری
                                                    یا تصویری را در آن قرار دهید.
                                                </td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری
                                                    یا تصویری را در آن قرار دهید.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه
                                                            مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه
                                                            مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه
                                                            مطلب</a></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="login.html">ورود</a></li>
                                    <li><a href="register.html">ثبت نام</a></li>
                                    <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                                    <li><a href="product.html">محصولات</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">تسویه حساب</a></li>
                                    <li><a href="compare.html">مقایسه</a></li>
                                    <li><a href="wishlist.html">لیست آرزو</a></li>
                                    <li><a href="search.html">جستجو</a></li>
                                </ul>
                                <ul>
                                    <li><a href="about-us.html">درباره ما</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="elements.html">عناصر</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="sitemap.html">نقشه سایت</a></li>
                                    <li><a href="contact-us.html">تماس با ما</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
                        <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Main آقایانu End-->
    </div>
@yield('content')
<!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>اطلاعات تماس</h5>
                        <ul>
                            <li class="address"><i class="fa fa-map-marker"></i>میدان تایمز، شماره 77، نیویورک</li>
                            <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                            <li class="email"><i class="fa fa-envelope"></i>برقراری ارتباط از طریق <a
                                        href="contact-us.html">تماس با ما</a>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="about-us.html">اطلاعات ارسال</a></li>
                            <li><a href="about-us.html">حریم خصوصی</a></li>
                            <li><a href="about-us.html">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما | پارسی سازی و ویرایش </p>
                    </div>
                    <div class="social pull-right flip"><a href="#" target="_blank"> <img data-toggle="tooltip"
                                                                                          src="/Site/image/socialicons/facebook.png"
                                                                                          alt="Facebook"
                                                                                          title="Facebook"></a> <a
                                href="#" target="_blank"> <img data-toggle="tooltip"
                                                               src="/Site/image/socialicons/twitter.png" alt="Twitter"
                                                               title="Twitter"> </a> <a href="#" target="_blank"> <img
                                    data-toggle="tooltip" src="/Site/image/socialicons/google_plus.png" alt="Google+"
                                    title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip"
                                                                                            src="/Site/image/socialicons/pinterest.png"
                                                                                            alt="Pinterest"
                                                                                            title="Pinterest"> </a> <a
                                href="#" target="_blank"> <img data-toggle="tooltip"
                                                               src="/Site/image/socialicons/rss.png" alt="RSS"
                                                               title="RSS"> </a></div>
                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار
                            دهید. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="payments_types"><a href="#" target="_blank"> <img data-toggle="tooltip"
                                                                                  src="/Site/image/payment/payment_paypal.png"
                                                                                  alt="paypal" title="PayPal"></a> <a
                                href="#" target="_blank"> <img data-toggle="tooltip"
                                                               src="/Site/image/payment/payment_american.png"
                                                               alt="american-express" title="American Express"></a> <a
                                href="#" target="_blank"> <img data-toggle="tooltip"
                                                               src="/Site/image/payment/payment_2checkout.png"
                                                               alt="2checkout" title="2checkout"></a> <a href="#"
                                                                                                         target="_blank">
                            <img data-toggle="tooltip" src="/Site/image/payment/payment_maestro.png" alt="maestro"
                                 title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip"
                                                                                        src="/Site/image/payment/payment_discover.png"
                                                                                        alt="discover" title="Discover"></a>
                        <a href="#" target="_blank"> <img data-toggle="tooltip"
                                                          src="/Site/image/payment/payment_mastercard.png"
                                                          alt="mastercard" title="MasterCard"></a></div>
                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)"
                              class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->
    <!-- Facebook Side Block Start -->
    <div id="facebook" class="fb-left sort-order-1">
        <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
        <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true"
             data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/harnishdesign/"><a
                            href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>
            </div>
        </div>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </div>
    <!-- Facebook Side Block End -->
    <!-- Twitter Side Block Start -->
    <div id="twitter_footer" class="twit-left sort-order-2">
        <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
        <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent"
           data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive"
           data-widget-id="347621595801608192">توییت های @</a>
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>
    </div>
    <!-- Twitter Side Block End -->
    <!-- Video Side Block Start -->
    <div id="video_box" class="vb-left sort-order-3">
        <div id="video_box_icon"><i class="fa fa-play"></i></div>
        <p>
            <iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>
        </p>
    </div>
    <!-- Video Side Block End -->
    <!-- Custom Side Block Start -->
    <div id="custom_side_block" class="custom_side_block_left sort-order-4">
        <div class="custom_side_block_icon"><i class="fa fa-chevron-right"></i></div>
        <table>
            <tbody>
            <tr>
                <td><h2>بلاک های محتوا</h2></td>
            </tr>
            <tr>
                <td><img alt="" src="/Site/image/banner/cms-block.jpg"></td>
            </tr>
            <tr>
                <td>میتوانید محتوای دلخواه خود را به این بخش اضافه کنید.</td>
            </tr>
            <tr>
                <td><strong><a href="#">ادامه مطلب</a></strong></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Custom Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/Site/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Site/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/Site/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/Site/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/Site/js/custom.js"></script>

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    $('.add-to-cart').on('click', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/cart/store',
            type: 'post',
            dataType: 'json',
            data: {id: id},
            success: function (data) {
                if (data.massage == 'Out Of Stack') {
                    alert('محصول ناموجود است');
                } else if (data.massage == 'successful!') {
                    alert('محصول با موفقیت به سبد اضافه شد');
                }
            }
        })
    });

    $('#filter_name').on('input', function () {
        var searchQ = $(this).val();
        if (searchQ == '') {
            $('.auto-complete').fadeOut().text('');
        } else {
            $.ajax({
                    url: '/search',
                    type: 'post',
                    dataType: 'json',
                    data: {searchQ: searchQ},
                    success: function (data) {
                        if (data.match == 'found') {
                            // console.log(data.product);
                            for (var i = 0; i < data.product.length; i++) {
                                $('.auto-complete').fadeIn().append('<li style="list-style: none;"><a href="" style="text-decoration: none;">' + data.product[i].title + '</a></li>');
                            }
                        } else if (data.match == 'not found') {
                            $('.auto-complete').fadeIn().text('').text('موردی یافت نشد !');
                        }
                    }
                }
            )
        }
    })
</script>

@yield('script')

<!-- JS Part End-->
</body>
</html>