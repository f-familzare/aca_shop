<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="/Panel/img/favicon.html">

    <title>@yield('title')- پنل مدیریت فروشگاه اینترنتی </title>
    @yield('style')
    <!-- Bootstrap core CSS -->
    <link href="/Panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Panel/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/Panel/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="/Panel/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="/Panel/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/Panel/css/style.css" rel="stylesheet">
    <link href="/Panel/css/style-responsive.css" rel="stylesheet"/>

    <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/Panel/js/html5shiv.js"></script>
    <script src="/Panel/js/respond.min.js"></script>

    <![endif]-->
</head>
<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">پنل مدیریت<span></span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge bg-success">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">شما 6 برنامه در دست کار دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پنل مدیریت</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">بروزرسانی دیتابیس</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه نویسی IPhone</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه موبایل</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پروفایل v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">برنامه های بیشتر</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-alt"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">شما 5 پیام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="/Panel/img/avatar-mini.jpg"></span>
                                <span class="subject">
                                    <span class="from">{{auth()->user()->name.' '.auth()->user()->last_name}}</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="/Panel/img/avatar-mini2.jpg"></span>
                                <span class="subject">
                                    <span class="from">ایمان مدائنی</span>
                                    <span class="time">10 دقیقه قبل</span>
                                    </span>
                                <span class="message">
                                     سلام، چطوری شما؟
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="/Panel/img/avatar-mini3.jpg"></span>
                                <span class="subject">
                                    <span class="from">صبا ذاکر</span>
                                    <span class="time">3 ساعت قبل</span>
                                    </span>
                                <span class="message">
                                        چه پنل مدیریتی فوق العاده ایی
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="/Panel/img/avatar-mini4.jpg"></span>
                                <span class="subject">
                                    <span class="from">مسعود شریفی</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">نمایش تمامی پیام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما 7 اعلام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                سرور شماره 3 توقف کرده
                                <span class="small italic">34 دقیقه قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                سرور شماره 4 بارگزاری نمی شود
                                <span class="small italic">1 ساعت قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                پنل مدیریت 24% پیشرفت داشته است
                                <span class="small italic">4 ساعت قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                ثبت نام کاربر جدید
                                <span class="small italic">همین حالا</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                برنامه پیام خطا دارد
                                <span class="small italic">10 دقیقه قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">نمایش تمامی اعلام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <form action="{{route('search')}}" method="GET">
                        <input type="text" class="form-control search" placeholder="Search" name="q">
                    </form>
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="/Panel/img/avatar1_small.jpg">
                        <span class="username">{{auth()->user()->name .' '.auth()->user()->last_name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i> {{ __('خروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="{{route('panel')}}">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>کاربران</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('user.index')}}">لیست کاربران</a></li>
                        <li><a class="" href="{{route('user.create')}}">افزودن کاربر جدبد</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-table"></i>
                        <span>محصولات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('product.index')}}">لیست محصولات</a></li>
                        <li><a class="" href="{{route('product.create')}}">افزودن محصول</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-list-alt"></i>
                        <span>سطوح دسترسی</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('role.index')}}">لیست سطوح دسترسی</a></li>
                        <li><a class="" href="{{route('role.create')}}">افزودن سطح دسترسی</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-tasks"></i>
                        <span>مجوزها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('permission.index')}}">لیست مجوزها</a></li>
                        <li><a class="" href="{{route('permission.create')}}">افزودن مجوز جدبد</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-th"></i>
                        <span>دسته بندی ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('category.index')}}">لیست دسته بندی ها</a></li>
                        <li><a class="" href="{{route('category.create')}}">افزودن دسته بندی جدبد</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-filter"></i>
                        <span>فیلتر ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('filter.index')}}">لیست فیلتر ها</a></li>
                        <li><a class="" href="{{route('filter.create')}}">افزودن فیلتر جدبد</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-picture"></i>
                        <span>اسلایدر ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('slider.index')}}">لیست اسلایدر ها</a></li>
                        <li><a class="" href="{{route('slider.create')}}">افزودن اسلایدر جدبد</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="{{route('home')}}">
                        <i class="icon-signout"></i>
                        <span>ورود به سایت</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
            <script>
                CKEDITOR.replace('text');
            </script>
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="/Panel/js/jquery.js"></script>
<script src="/Panel/js/jquery-1.8.3.min.js"></script>
<script src="/Panel/js/bootstrap.min.js"></script>
<script src="/Panel/js/jquery.scrollTo.min.js"></script>
<script src="/Panel/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/Panel/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/Panel/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/Panel/js/owl.carousel.js"></script>
<script src="/Panel/js/jquery.customSelect.min.js"></script>

<!--common script for all pages-->
<script src="/Panel/js/common-scripts.js"></script>

<!--script for this page-->
<script src="/Panel/js/sparkline-chart.js"></script>
<script src="/Panel/js/easy-pie-chart.js"></script>

<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });
</script>

@yield('script')
</body>
</html>
