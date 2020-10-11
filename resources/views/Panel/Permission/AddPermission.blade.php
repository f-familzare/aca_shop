@extends('layouts.panel-master')
@section('title','افزودن دسترسی')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن دسترسی جدید
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('permission.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسترسی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="permission_title" value="{{old('permission_title')}}">
                    </div>

                    <label class="col-sm-2 control-label">برچسب :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-input" name="permission_label" value="{{old('permission_label')}}">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-round btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </section>

@endsection
