@extends('layouts.panel-master')
@section('title','لیست کاربران')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست محصولات
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> نام و نام خانوادگی</th>
                        <th><i class="icon-user"></i> نام کاربری </th>
                        <th><i class="icon-picture"></i> تصویر</th>
                        <th><i class="icon-inbox"></i> ایمیل</th>
                        <th><i class="icon-mobile-phone"></i> موبایل</th>
                        <th class="hidden-phone"><i class="icon-stop"></i> وضعیت</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th><i class=""></i>سمت</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="#">{{$user->name .' '. $user->last_name}}</a></td>
                            <td>{{$user->username}}</td>
                            <td>
                                <a href="#">
                                    <img class="task-thumb" src="{{$user->avatar}}"
                                         alt="{{$user->name.' '. $user->last_name}}">
                                </a>
                            </td>
                            <td><a href="#">{{$user->email}}</a></td>
                            <td><a href="#">{{$user->mobile}}</a></td>
                            <td>
                                <span class="label {{$user->status=='فعال'?'label-success':'label-danger'}}">{{$user->status}}</span>
                            </td>
                            <td>{{jdate($user->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($user->updated_at)->format('%A, %d %B %y')}}</td>
                            <td><a href="{{route('user.edit',['id'=>$user->id])}}"
                                   class="btn btn-primary btn-xs"><i
                                            class="icon-pencil"></i> مدیریت سطح دسترسی</a></td>
                            <td>
                                <a href="{{route('user.show',['id'=>$user->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>

                                <form action="{{route('user.destroy',['id'=>$user->id])}}" method="POST"
                                      style="display: inline">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$users->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection