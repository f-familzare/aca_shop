@extends('layouts.panel-master')
@section('title','لیست دسته بندی ها')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسته بندی ها
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>نام دسته بندی</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td><a href="#">{{$category->category_title}}</a></td>
                            <td>{{jdate($category->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($category->updated_at)->format('%A, %d %B %y')}}</td>
                            <td>
                                <a href="{{route('category.show',['id'=>$category->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>
                                <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-primary btn-xs"><i
                                            class="icon-pencil"></i></a>
                                <form action="{{route('category.destroy',['id'=>$category->id])}}" method="POST"
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
            {{$categories->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection