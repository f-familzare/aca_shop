@extends('layouts.panel-master')
@section('title','ویرایش دسترسی')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش دسترسی {{$permission->title}}
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('permission.update',['id'=>$permission->id])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسترسی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="permission_title" value="{{$permission->permission_title}}">
                    </div>
                    <label class="col-sm-2 control-label">برچسب :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="permission_label" value="{{$permission->permission_label}}">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ویرایش</button>
                </div>
            </form>
        </div>
    </section>

@endsection
