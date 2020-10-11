@extends('layouts.panel-master')
@section('content')
    <!--state overview start-->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-user"></i>
                </div>
                <div class="value">
                    <h1>22</h1>
                    <p>کاربر جدید</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="icon-tags"></i>
                </div>
                <div class="value">
                    <h1>140</h1>
                    <p>فروش</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol yellow">
                    <i class="icon-shopping-cart"></i>
                </div>
                <div class="value">
                    <h1>345</h1>
                    <p>سفارش جدید</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="icon-bar-chart"></i>
                </div>
                <div class="value">
                    <h1>34,500</h1>
                    <p>سود خالص</p>
                </div>
            </section>
        </div>
    </div>
    <!--state overview end-->

    <div class="row">
        <div class="col-lg-12">
            <!--custom chart start-->
            <div class="border-head">
                <h3>چارت ورودی</h3>
            </div>
            <div class="custom-bar-chart">
                <div class="bar">
                    <div class="title">فروردین</div>
                    <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                </div>
                <div class="bar doted">
                    <div class="title">اردیبهشت</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">خرداد</div>
                    <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                </div>
                <div class="bar doted">
                    <div class="title">تیر</div>
                    <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                </div>
                <div class="bar">
                    <div class="title">مرداد</div>
                    <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                </div>
                <div class="bar doted">
                    <div class="title">شهریور</div>
                    <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                </div>
                <div class="bar">
                    <div class="title">مهر</div>
                    <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
                <div class="bar doted">
                    <div class="title">آبان</div>
                    <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar ">
                    <div class="title">آذر</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar doted">
                    <div class="title">دی</div>
                    <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                </div>
                <div class="bar ">
                    <div class="title">بهمن</div>
                    <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar doted">
                    <div class="title">اسفند</div>
                    <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                </div>
            </div>
            <!--custom chart end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <!--user info table start-->
            <section class="panel">
                <div class="panel-body">
                    <a href="#" class="task-thumb">
                        <img src="img/avatar1.jpg" alt="">
                    </a>
                    <div class="task-thumb-details">
                        <h1><a href="#">Anjelina Joli</a></h1>
                        <p>Senior Architect</p>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>
                            <i class=" icon-tasks"></i>
                        </td>
                        <td>New Task Issued</td>
                        <td> 02</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon-warning-sign"></i>
                        </td>
                        <td>Task Pending</td>
                        <td> 14</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon-envelope"></i>
                        </td>
                        <td>Inbox</td>
                        <td> 45</td>
                    </tr>
                    <tr>
                        <td>
                            <i class=" icon-bell-alt"></i>
                        </td>
                        <td>New Notification</td>
                        <td> 09</td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!--user info table end-->
        </div>
        <div class="col-lg-8">
            <!--work progress start-->
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="task-progress">
                        <h1>Work Progress</h1>
                        <p>Anjelina Joli</p>
                    </div>
                    <div class="task-option">
                        <select class="styled">
                            <option>Anjelina Joli</option>
                            <option>Tom Crouse</option>
                            <option>Jhon Due</option>
                        </select>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            Target Sell
                        </td>
                        <td>
                            <span class="badge bg-important">75%</span>
                        </td>
                        <td>
                            <div id="work-progress1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Product Delivery
                        </td>
                        <td>
                            <span class="badge bg-success">43%</span>
                        </td>
                        <td>
                            <div id="work-progress2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Payment Collection
                        </td>
                        <td>
                            <span class="badge bg-info">67%</span>
                        </td>
                        <td>
                            <div id="work-progress3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Work Progress
                        </td>
                        <td>
                            <span class="badge bg-warning">30%</span>
                        </td>
                        <td>
                            <div id="work-progress4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Delivery Pending
                        </td>
                        <td>
                            <span class="badge bg-primary">15%</span>
                        </td>
                        <td>
                            <div id="work-progress5"></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!--work progress end-->
        </div>
    </div>
@endsection