@extends('layouts.panel-master')
@section('title','افزودن گالری تصاویر')
@section('style')
    <link rel="stylesheet" href="/Panel/css/dropzone.css">
    <link rel="stylesheet" href="/Panel/css/basic.css">
@endsection
@section('content')
    <section class="panel">
        <header class="panel-heading">
             افزودن گالری تصاویر {{ $product->title}}
        </header>
        <div class="panel-body">
            <form action="{{route('gallery.upload',['id'=>$product->id])}}"
                  class="dropzone"
                  id="my-awesome-dropzone" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="files table table-striped" id="previews">
                <input type="file" name="file" class="d-none" multiple accept="image/*"/>

                    <div id="template" class="file-row">
                        <!-- This is used as the file preview template -->
                        <div>
                            <span class="preview"><img data-dz-thumbnail /></span>
                        </div>
                        <div>
                            <p class="name" data-dz-name></p>
                            <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                        <div>
                            <p class="size" data-dz-size></p>
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>شروع</span>
                            </button>
                            <button data-dz-remove class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>لغو</span>
                            </button>
                            <form action="{{--{{route('gallery.destroy',$product->id)}}--}}" method="POST">
{{--                                {{csrf_field()}}--}}
{{--                                {{method_field('DELETE')}}--}}
                                <button data-dz-remove class="btn btn-danger delete">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>حذف</span>
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

@endsection
@section('script')
    <script src="/Panel/js/dropzone.js"></script>
@endsection