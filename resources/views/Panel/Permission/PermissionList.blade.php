@extends('layouts.panel-master')
@section('title','لیست دسترسی ها')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسترسی ها
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="icon-list"></i></th>
                        <th>نام دسترسی</th>
                        <th>برچسب دسترسی</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php ($i = 1)
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$permission->permission_title}}</td>
                            <td>{{$permission->permission_label}}</td>
                            <td>{{jdate($permission->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($permission->updated_at)->format('%A, %d %B %y')}}</td>
                            <td>
                                <a href="{{route('permission.show',['id'=>$permission->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>
                                <a href="{{route('permission.edit',['id'=>$permission->id])}}"
                                   class="btn btn-primary btn-xs"><i
                                            class="icon-pencil"></i></a>
                                <form action="{{route('permission.destroy',['id'=>$permission->id])}}" method="POST"
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
            {{$permissions->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection