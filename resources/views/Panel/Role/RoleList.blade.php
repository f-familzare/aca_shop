@extends('layouts.panel-master')
@section('title','لیست سطوح دسترسی')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست سطوح دسترسی
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="icon-list"></i></th>
                        <th>نام سطح دسترسی</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><a href="#">{{$role->title}}</a></td>
                            <td>{{jdate($role->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($role->updated_at)->format('%A, %d %B %y')}}</td>
                            <td>
                                <a href="{{route('role.show',['id'=>$role->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>
                                <a href="{{route('role.edit',['id'=>$role->id])}}" class="btn btn-primary btn-xs"><i
                                            class="icon-pencil"></i></a>
                                <form action="{{route('role.destroy',['id'=>$role->id])}}" method="POST"
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
            {{$roles->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection