﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../public/Panel/img/favicon.html">

    <title>Basic Table</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../public/Panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/Panel/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../public/Panel/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../../../public/Panel/css/style.css" rel="stylesheet">
    <link href="../../../public/Panel/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="../../../public/Panel/js/html5shiv.js"></script>
    <script src="../../../public/Panel/js/respond.min.js"></script>
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
            <a href="#" class="logo">فلت<span>لب</span></a>
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
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
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
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه نویسی  IPhone</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
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
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
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
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
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
                                    <span class="photo">
                                        <img alt="avatar" src="../../../public/Panel/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from">سجاد باقرزاده</span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="../../../public/Panel/img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">ایمان مدائنی</span>
                                        <span class="time">10 دقیقه قبل</span>
                                    </span>
                                    <span class="message">سلام، چطوری شما؟
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="../../../public/Panel/img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">صبا ذاکر</span>
                                        <span class="time">3 ساعت قبل</span>
                                    </span>
                                    <span class="message">چه پنل مدیریتی فوق العاده ایی
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="../../../public/Panel/img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">مسعود شریفی</span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">سلام،متن پیام نمایشی جهت تست
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
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="../../../public/Panel/img/avatar1_small.jpg">
                            <span class="username">سجاد باقرزاده</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                            <li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>
                            <li><a href="login.html"><i class="icon-key"></i>خروج</a></li>
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
                        <a class="" href="index.html">
                            <i class="icon-dashboard"></i>
                            <span>صفحه اصلی</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>عناصر صفحه</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="general.html">عمومی</a></li>
                            <li><a class="" href="buttons.html">دکمه ها</a></li>
                            <li><a class="" href="widget.html">ویجت ها</a></li>
                            <li><a class="" href="slider.html">اسلایدر ها</a></li>
                            <li><a class="" href="font_awesome.html">فونت های شکل دار</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-cogs"></i>
                            <span>کامنت ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="grids.html">گرید</a></li>
                            <li><a class="" href="calendar.html">تقویم</a></li>
                            <li><a class="" href="charts.html">چارت</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-tasks"></i>
                            <span>ابزارهای فرم</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="form_component.html">کامنت فرم</a></li>
                            <li><a class="" href="form_wizard.html">فرم Wizard</a></li>
                            <li><a class="" href="form_validation.html">ارزیابی فرم</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-th"></i>
                            <span>اطلاعات جدول</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="basic_table.html">جدول ساده</a></li>
                            <li><a class="" href="dynamic_table.html">جدول داینامیک</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="inbox.html">
                            <i class="icon-envelope"></i>
                            <span>ایمیل </span>
                            <span class="label label-danger pull-right mail-info">2</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-glass"></i>
                            <span>عناصر اضافی</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="blank.html">صفحه خالی</a></li>
                            <li><a class="" href="profile.html">پروفایل</a></li>
                            <li><a class="" href="invoice.html">فاکتور</a></li>
                            <li><a class="" href="404.html">404 Error</a></li>
                            <li><a class="" href="500.html">500 Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="login.html">
                            <i class="icon-user"></i>
                            <span>صفحه ورود به سایت</span>
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
                <!-- page start-->
                <div class="row">
                    <div class="col-sm-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Basic Table
                         
                            </header>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Striped Table
                         
                            </header>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <section class="panel">
                            <header class="panel-heading no-border">
                                Border Table
                         
                            </header>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@TwBootstrap</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Hover Table
                         
                            </header>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sumon</td>
                                        <td>Mosa</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Advanced Table
                         
                            </header>
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th><i class="icon-bullhorn"></i>Company</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>Descrition</th>
                                        <th><i class="icon-bookmark"></i>Profit</th>
                                        <th><i class=" icon-edit"></i>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Vector Ltd</a></td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                        <td>12120.00$ </td>
                                        <td><span class="label label-info label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Adimin co
                                      </a>
                                        </td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                        <td>56456.00$ </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">boka soka
                                      </a>
                                        </td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                        <td>14400.00$ </td>
                                        <td><span class="label label-success label-mini">Paid</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">salbal llb
                                      </a>
                                        </td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                        <td>2323.50$ </td>
                                        <td><span class="label label-danger label-mini">Paid</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Vector Ltd</a></td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                        <td>12120.00$ </td>
                                        <td><span class="label label-primary label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Adimin co
                                      </a>
                                        </td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                        <td>56456.00$ </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Vector Ltd</a></td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                        <td>12120.00$ </td>
                                        <td><span class="label label-success label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Adimin co
                                      </a>
                                        </td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                        <td>56456.00$ </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Vector Ltd</a></td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                        <td>12120.00$ </td>
                                        <td><span class="label label-info label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Adimin co
                                      </a>
                                        </td>
                                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                        <td>56456.00$ </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../../public/Panel/js/jquery.js"></script>
    <script src="../../../public/Panel/js/bootstrap.min.js"></script>
    <script src="../../../public/Panel/js/jquery.scrollTo.min.js"></script>
    <script src="../../../public/Panel/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../../../public/Panel/js/common-scripts.js"></script>


</body>
</html>
