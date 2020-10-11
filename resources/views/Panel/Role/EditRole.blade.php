@extends('layouts.panel-master')
@section('title','ویرایش سطح')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش سطح {{$role->title}}
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('role.update',['id'=>$role->id])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام سطح دسترسی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="title" value="{{$role->title}}">
                    </div>
                    <label class="col-sm-2 control-label">معرفی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" value="{{$role->about}}" name="about">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">دسترسی :</label>
                    @foreach($permissions as $permission)
                        <div class="col-sm-2">
                            <div class="input-group">
                        <span class="input-group-addon round-input">
                            <input type="checkbox" value="{{$permission->id}}" name="permission_id[]" multiple>
                        </span>
                                <button type="button" class="form-control round-input">{{$permission->permission_title}}</button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <button class="btn btn-round btn-primary">ویرایش</button>
                </div>
            </form>
        </div>
    </section>

@endsection
