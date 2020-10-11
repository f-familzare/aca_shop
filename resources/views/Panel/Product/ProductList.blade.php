@extends('layouts.panel-master')
@section('title','لیست محصولات')
@section('content')
    <!-- page start-->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست محصولات
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="icon-list"></i></th>
                        <th>نام محصول</th>
                        <th><i class="icon-picture"></i> تصویر</th>
                        <th><i class="icon-dollar"></i> قیمت</th>
                        <th><i class="icon-table"></i> دسته بندی</th>
                        <th><i class="icon-table"></i> تعداد</th>
                        <th><i class=""></i>تخفیف (٪)</th>
                        <th class="hidden-phone"><i class="icon-stop"></i> وضعیت</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ بروزرسانی</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                <a href="{{route('site.product.show',['id'=>$product->id])}}">{{$product->title}}</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img class="task-thumb" src="{{$product->imgUrl}}"
                                         alt="{{$product->title}}">
                                </a>
                            </td>
                            <td><a href="#">{{number_format($product->price)}} تومان </a></td>
                            <td><a href="#">{{$product->category->category_title}}</a></td>
                            <td><a href="#">{{$product->count}}</a></td>
                            <td><a href="#">{{$product->discount}}</a></td>
                            <td><span
                                        class="label {{$product->status=='فعال'?'label-success':'label-danger'}}">{{$product->status}}</span>
                            </td>
                            <td>{{jdate($product->created_at)->format('%A, %d %B %y')}}</td>
                            <td class="hidden-phone">{{jdate($product->updated_at)->format('%A, %d %B %y')}}</td>
                            <td>
                                <a href="{{route('product.gallery',['product_id'=>$product->id])}}"
                                   class="btn btn-default btn-xs"><i class="icon-picture"></i></a>

                                <a href="{{route('product.show',['id'=>$product->id])}}" target="_blank"
                                   class="btn btn-success btn-xs"><i class="icon-list"></i></a>
                                @can('edit_product')
                                    {{--@can('view',$product)--}}
                                    <a href="{{route('product.edit',['id'=>$product->id])}}"
                                       class="btn btn-primary btn-xs"><i
                                                class="icon-pencil"></i></a>
                                    {{--@endcan--}}
                                @endcan
                                @can('delete_product')
                                    <form action="{{route('product.destroy',['id'=>$product->id])}}" method="POST"
                                          style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$products->links()}}
        </section>
    </div>
    <!-- page end-->

    <!-- js placed at the end of the document so the pages load faster -->

    <!--script for this page only-->
    <script src="/Panel/js/dynamic-table.js"></script>

@endsection