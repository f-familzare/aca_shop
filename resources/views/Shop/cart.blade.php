{{--
@extends('layouts.master')
@section('title','سبد خرید')
@section('content')
    <div id="container">
        @if(count($carts)>0)
            <div class="container">
                <!-- Breadcrumb Start-->
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                    <li><a href="{{route('cart')}}">سبد خرید</a></li>
                </ul>
                <!-- Breadcrumb End-->
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-sm-12">
                        <h1 class="title">سبد خرید</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td class="text-center">تصویر</td>
                                    <td class="text-left">نام محصول</td>
                                    <td class="text-left">برند</td>
                                    <td class="text-left">تعداد</td>
                                    <td class="text-right">تخفیف</td>
                                    <td class="text-right">قیمت واحد</td>
                                    <td class="text-right">کل (+ تخفیف)</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{route('site.product.show',[$cart->product_id])}}">
                                                <img src="{{$cart->product->imgUrl}}" alt="{{$cart->product->title}}"
                                                     title="{{$cart->product->title}}" class="img-thumbnail"
                                                     style="height: 150px"/>
                                            </a>
                                        </td>
                                        <td class="text-left"><a href="product.html">{{$cart->product->title}}</a><br/>
                                            <small>امتیازات خرید: 1000</small>
                                        </td>
                                        <td class="text-left">{{$cart->product->brand}}</td>
                                        <td class="text-left">
                                            <div class="input-group btn-block quantity">
                                                <input type="number" name="quantity" value="{{$cart->count}}" size="2" min="1" max="{{$cart->product->count}}" class="form-control counter" />
                                                <span class="input-group-btn">
                                                    <button type="reset" data-toggle="tooltip" title="بروزرسانی"
                                                            class="btn btn-primary"><i
                                                                class="fa fa-refresh"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="حذف"
                                                            class="btn btn-danger" onClick=""><i
                                                                class="fa fa-times-circle"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-right">{{$cart->product->discount}} %</td>
                                        <td class="text-right price">{{$cart->total_price}}</td>
                                        <td class="text-right sum">{{$cart->total_price * $cart->count}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
                        <p>در صورتی که کد تخفیف در اختیار دارید میتوانید از آن در اینجا استفاده کنید.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">استفاده از کوپن تخفیف</h4>
                                    </div>
                                    <div id="collapse-coupon" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <label class="col-sm-4 control-label" for="input-coupon">کد تخفیف خود را در
                                                اینجا وارد کنید</label>
                                            <div class="input-group">
                                                <input type="text" name="coupon" value=""
                                                       placeholder="کد تخفیف خود را در اینجا وارد کنید"
                                                       id="input-coupon"
                                                       class="form-control"/>
                                                <span class="input-group-btn">
                      <input type="button" value="اعمال کد تخفیف" id="button-coupon" data-loading-text="بارگذاری ..."
                             class="btn btn-primary"/>
                      </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">استفاده از کارت هدیه</h4>
                                    </div>
                                    <div id="collapse-voucher" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <label class="col-sm-4 control-label" for="input-voucher">کد کارت هدیه را در
                                                اینجا وارد کنید</label>
                                            <div class="input-group">
                                                <input type="text" name="voucher" value=""
                                                       placeholder="کد کارت هدیه را در اینجا وارد کنید"
                                                       id="input-voucher"
                                                       class="form-control"/>
                                                <span class="input-group-btn">
                      <input type="submit" value="اعمال کارت هدیه" id="button-voucher" data-loading-text="بارگذاری ..."
                             class="btn btn-primary"/>
                      </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">پیش بینی هزینه ی حمل و نقل و مالیات</h4>
                            </div>
                            <div id="collapse-shipping" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>مقصد خود را جهت براورد هزینه ی ارسال وارد کنید.</p>
                                    <form class="form-horizontal">
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-country">کشور</label>
                                            <div class="col-sm-10">
                                                <select name="country_id" id="input-country" class="form-control">
                                                    <option value=""> --- لطفا انتخاب کنید ---</option>
                                                    <option value="244">Aaland Islands</option>
                                                    <option value="1">Afghanistan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-zone">شهر / استان</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="input-zone" name="zone_id">
                                                    <option value=""> --- لطفا انتخاب کنید ---</option>
                                                    <option value="13">Aberdeen</option>
                                                    <option value="14">Aberdeenshire</option>
                                                    <option value="15">Anglesey</option>
                                                    <option value="16">Angus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-postcode">کد پستی</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="postcode" value="" placeholder="کد پستی"
                                                       id="input-postcode" class="form-control"/>
                                            </div>
                                        </div>
                                        <input type="button" value="دریافت پیش فاکتور" id="button-quote"
                                               data-loading-text="بارگذاری ..." class="btn btn-primary"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-right"><strong>جمع کل:</strong></td>
                                        <td class="text-right sumAll">{{number_format($totalCost)}} تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>کسر هدیه:</strong></td>
                                        <td class="text-right">4000 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>قابل پرداخت :</strong></td>
                                        <td class="text-right">139880 تومان</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-left"><a href="{{route('home')}}" class="btn btn-default">ادامه خرید</a>
                            </div>
                            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">تسویه حساب</a></div>
                        </div>
                    </div>
                    <!--Middle Part End -->
                </div>

            </div>
        @else
            <h2 class="text-center">سبد خرید شما خالی است ! </h2>
        @endif
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.counter').bind('keyup mouseup input', function () {
                if ($(this).val() > $(this).attr('max')) {
                    $(this).val($(this).attr('max'));
                } else if ($(this).val() == 0) {
                    $(this).val('1');
                } else {
                    var total = ($(this).val()) * (parseInt($(this).parent().siblings('.price').text()));

                    console.log(total);

                    $(this).parent().siblings('.sum').text(total);
                    var sumAll = 0;
                    $('.sum').each(function () {
                        var eachTotal = parseInt($(this).text());
                        sumAll += eachTotal;
                    });
                    $('.sumAll').text(sumAll);

                    console.log(sumAll);
                }
            })
        })
    </script>
@endsection--}}
@extends('layouts.master')
@section('title','سبد خرید')
@section('content')
    <div id="container">
        @if(count($carts)>0)
            <div class="container">
                <!-- Breadcrumb Start-->
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                    <li><a href="{{route('cart')}}">سبد خرید</a></li>
                </ul>
                <!-- Breadcrumb End-->
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-sm-12">
                        <h1 class="title">سبد خرید</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td class="text-center">تصویر</td>
                                    <td class="text-left">نام محصول</td>
                                    <td class="text-left">برند</td>
                                    <td class="text-left">تعداد</td>
                                    <td class="text-right">تخفیف</td>
                                    <td class="text-right">قیمت واحد</td>
                                    <td class="text-right">کل (+ تخفیف)</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{route('site.product.show',[$cart->product_id])}}">
                                                <img src="{{$cart->product->imgUrl}}" alt="{{$cart->product->title}}"
                                                     title="{{$cart->product->title}}" class="img-thumbnail"
                                                     style="height: 150px"/>
                                            </a>
                                        </td>
                                        <td class="text-left"><a href="product.html">{{$cart->product->title}}</a><br/>
                                            <small>امتیازات خرید: 1000</small>
                                        </td>
                                        <td class="text-left">{{$cart->product->brand}}</td>
                                        <td class="text-left">
                                            <input type="number" name="quantity" value="{{$cart->count}}" size="2" min="1" max="{{$cart->product->count}}" class="form-control counter" />
                                        </td>
                                        <td class="text-right">{{$cart->product->discount}} %</td>
                                        <td class="text-right price">{{$cart->total_price}}</td>
                                        <td class="text-right sum">{{$cart->total_price * $cart->count}}</td>
                                    </tr>
                                @endforeach
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.counter').bind('keyup mouseup input',function(){
                                            if($(this).val() > $(this).attr('max')){
                                                $(this).val($(this).attr('max'));
                                            }
                                            else if($(this).val()== 0){
                                                $(this).val('1');
                                            }
                                            else
                                            {
                                                var total=($(this).val())*(parseInt($(this).parent().siblings('.price').text()));
                                                $(this).parent().siblings('.sum').text(total);
                                                var sumAll=0;
                                                console.log(total);
                                                $('.sum').each(function(){
                                                    var eachTotal= parseInt($(this).text());
                                                    sumAll+=eachTotal;
                                                });
                                                $('.sumAll').text(sumAll);
                                            }
                                        });
                                    });
                                </script>
                                </tbody>
                            </table>
                        </div>
                        <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
                        <p>در صورتی که کد تخفیف در اختیار دارید میتوانید از آن در اینجا استفاده کنید.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">استفاده از کوپن تخفیف</h4>
                                    </div>
                                    <div id="collapse-coupon" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <label class="col-sm-4 control-label" for="input-coupon">کد تخفیف خود را در
                                                اینجا وارد کنید</label>
                                            <div class="input-group">
                                                <input type="text" name="coupon" value=""
                                                       placeholder="کد تخفیف خود را در اینجا وارد کنید"
                                                       id="input-coupon"
                                                       class="form-control"/>
                                                <span class="input-group-btn">
                      <input type="button" value="اعمال کد تخفیف" id="button-coupon" data-loading-text="بارگذاری ..."
                             class="btn btn-primary"/>
                      </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">استفاده از کارت هدیه</h4>
                                    </div>
                                    <div id="collapse-voucher" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <label class="col-sm-4 control-label" for="input-voucher">کد کارت هدیه را در
                                                اینجا وارد کنید</label>
                                            <div class="input-group">
                                                <input type="text" name="voucher" value=""
                                                       placeholder="کد کارت هدیه را در اینجا وارد کنید"
                                                       id="input-voucher"
                                                       class="form-control"/>
                                                <span class="input-group-btn">
                      <input type="submit" value="اعمال کارت هدیه" id="button-voucher" data-loading-text="بارگذاری ..."
                             class="btn btn-primary"/>
                      </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">پیش بینی هزینه ی حمل و نقل و مالیات</h4>
                            </div>
                            <div id="collapse-shipping" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>مقصد خود را جهت براورد هزینه ی ارسال وارد کنید.</p>
                                    <form class="form-horizontal">
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-country">کشور</label>
                                            <div class="col-sm-10">
                                                <select name="country_id" id="input-country" class="form-control">
                                                    <option value=""> --- لطفا انتخاب کنید ---</option>
                                                    <option value="244">Aaland Islands</option>
                                                    <option value="1">Afghanistan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-zone">شهر / استان</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="input-zone" name="zone_id">
                                                    <option value=""> --- لطفا انتخاب کنید ---</option>
                                                    <option value="13">Aberdeen</option>
                                                    <option value="14">Aberdeenshire</option>
                                                    <option value="15">Anglesey</option>
                                                    <option value="16">Angus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-postcode">کد پستی</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="postcode" value="" placeholder="کد پستی"
                                                       id="input-postcode" class="form-control"/>
                                            </div>
                                        </div>
                                        <input type="button" value="دریافت پیش فاکتور" id="button-quote"
                                               data-loading-text="بارگذاری ..." class="btn btn-primary"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-right"><strong>جمع کل:</strong></td>
                                        <td class="text-right sumAll">{{number_format($totalCost)}} تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>کسر هدیه:</strong></td>
                                        <td class="text-right">4000 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>قابل پرداخت :</strong></td>
                                        <td class="text-right">139880 تومان</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-left"><a href="{{route('home')}}" class="btn btn-default">ادامه خرید</a>
                            </div>
                            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">تسویه حساب</a></div>
                        </div>
                    </div>
                    <!--Middle Part End -->
                </div>

            </div>
        @else
            <h2 class="text-center">سبد خرید شما خالی است ! </h2>
        @endif
    </div>
@endsection