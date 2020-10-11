@extends('layouts.panel-master')
@section('title','لیست فیلتر ها')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست فیلتر ها
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>نام فیلتر</th>
                        <th>نام فیلتر مادر</th>
                        <th>نام دسته بندی</th>
                        <th>شکل فیلتر</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($filters as $filter)
                        <tr>
                            <td><a href="#">{{$filter->title_fa}} ({{$filter->title_en}})</a></td>
                            <td><a href="#">{{$filter->parent_id==0?'فیلتر اصلی':$filter->sub_filter['title_fa']}}</a></td>
                            <td><a href="#">{{$filter->category->category_title}}</a></td>
                            <td><a href="#">{{$filter->type}} <i class="{{$filter->type=='چک باکس'?'icon-check':'icon-bullseye'}}"></i></a></td>
                            <td>{{jdate($filter->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($filter->updated_at)->format('%A, %d %B %y')}}</td>
                            <td>
                                <a href="{{route('filter.show',['id'=>$filter->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>
                                <a href="{{route('filter.edit',['id'=>$filter->id])}}" class="btn btn-primary btn-xs"><i
                                            class="icon-pencil"></i></a>
                                <form action="{{route('filter.destroy',['id'=>$filter->id])}}" method="POST"
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
            {{$filters->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection