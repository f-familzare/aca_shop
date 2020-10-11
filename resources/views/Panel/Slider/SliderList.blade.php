@extends('layouts.panel-master')
@section('title','لیست اسلایدر ها')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست اسلایدر ها
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>عنوان اسلایدر</th>
                        <th>تصویر اسلایدر</th>
                        <th>لینک اسلایدر</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td><a href="#">{{$slider->title}}</a></td>
                            <td><img src="{{$slider->imgUrl}}" alt="{{$slider->title}}" class="task-thumb"></td>
                            <td><a href="{{$slider->url}}">{{$slider->url}}</a></td>
                            <td>{{jdate($slider->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($slider->updated_at)->format('%A, %d %B %y')}}</td>
                            <td>
                                <a href="{{route('slider.show',['id'=>$slider->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>
                                <a href="{{route('slider.edit',['id'=>$slider->id])}}" class="btn btn-primary btn-xs"><i
                                            class="icon-pencil"></i></a>
                                <form action="{{route('slider.destroy',['id'=>$slider->id])}}" method="POST"
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
            {{$sliders->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection