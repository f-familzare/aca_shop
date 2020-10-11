@extends('layouts.panel-master')
@section('title','افزودن کاربر')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن کاربر جدید
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="name" value="{{old('name')}}">
                    </div>

                    <label class="col-sm-2 control-label">نام خانوادگی :</label>
                    <div class="col-sm-4">
                        <input class="form-control round-input" name="last_name" value="{{old('last_name')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ایمیل :</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control round-input" name="email" value="{{old('email')}}">
                    </div>

                    <label class="col-sm-2 control-label">موبایل :</label>
                    <div class="col-sm-4">
                        <input type="mobile" class="form-control round-input" name="mobile" value="{{old('mobile')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">عکس پروفایل :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control round-input" name="image">
                    </div>
                    <label class="col-sm-2 control-label">رمز عبور :</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control round-input" name="password"  value="{{old('password')}}">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label">دسترسی :</label>
                        @foreach($roles as $role)
                            <div class="col-sm-2">
                                <div class="input-group">
                        <span class="input-group-addon round-input">
                            <input type="checkbox" value="{{$role->id}}" name="role_id[]" multiple>
                        </span>
                                    <button type="button" class="form-control round-input">{{$role->title}}</button>
                                </div>
                            </div>
                        @endforeach
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">وضعیت : </label>
                    <div class="col-sm-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="menuStatus1" value="فعال" checked>
                                فعال
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="menuStatus2" value="غیرفعال">
                                غیرفعال
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </section>

@endsection
