@extends('layouts.panel-master')
@section('title','افزودن فیلتر')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن فیلتر جدید
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="POST" action="{{route('filter.store')}}"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسته بندی :</label>
                    <div class="col-sm-4">
                        <select class="form-control round-input" name="category_id">
                            <option value="0" selected="selected">نام دسته بندی را انتخاب کنید ...</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام فیلتر مادر :</label>
                    <div class="col-sm-4">
                        <select class="form-control round-input" name="parent_id">
                            <option value="0" selected="selected">نام فیلتر مادر را انتخاب کنید ...</option>
                            @foreach($filters as $filter)
                                <option value="{{$filter->id}}">{{$filter->title_fa}} ({{$filter->title_en}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="adder">
                    <div class="add-filter">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">نام فارسی فیلتر :</label>
                            <div class="col-sm-2">
                                <input type="text" name="title_fa[]" id="" class="form-control round-input">
                            </div>
                            <label class="col-sm-2 control-label">نام انگلیسی فیلتر :</label>
                            <div class="col-sm-2">
                                <input type="text" name="title_en[]" id="" class="form-control round-input">
                            </div>
                            <label class="col-sm-1 control-label">نوع فیلتر :</label>
                            <div class="col-sm-3">
                                <select class="form-control round-input" name="type[]">
                                    <option value="رادیو باتن">رادیو باتن</option>
                                    <option value="چک باکس">چک باکس</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-default btn-round" title="افزودن فیلتر جدید" id="add">
                        <i class="icon-plus"></i></button>
                </div>
                <div class="text-center">
                    <button class="btn btn-round btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </section>

@endsection
@section('script')
    <script>
        var count = 1;
        $('#add').click(function () {
            count++;
            $('#adder').append('<div class="add-filter">' +
                '<div class="form-group">' +
                '<label class="col-sm-2 control-label">نام فارسی فیلتر :</label>' +
                '<div class="col-sm-2">' +
                '<input type="text" name="title_fa[]" id="title_fa[' + count + ']" class="form-control round-input">' +
                '</div>' +
                '<label class="col-sm-2 control-label">نام انگلیسی فیلتر :</label>' +
                '<div class="col-sm-2">' +
                '<input type="text" name="title_en[]" id="title_en[' + count + ']" class="form-control round-input">' +
                '</div>' +
                '<label class="col-sm-1 control-label">نوع فیلتر :</label>' +
                '<div class="col-sm-3">' +
                '<select class="form-control round-input" name="type[]">' +
                '<option value="رادیو باتن">رادیو باتن </option>' +
                '<option value="چک باکس">چک باکس </option>' +
                '</select>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>')
        })
    </script>
@endsection