@extends('layouts.backend')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g" style="margin-top:20px ">

            </div>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-title">BATCH_ID</th>
                                <th class="table-type">手机号</th>
                                <th class="table-author am-hide-sm-only">状态</th>
                                <th class="table-author am-hide-sm-only">原因</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursor as $v=>$k)
                                <tr>
                                    <td><a href="#">{{$k->batch_id}}</a></td>
                                    <td>{{$k->mobile}}</td>
                                    <td class="am-hide-sm-only">{{$k->status}}</td>
                                    {{--<td class="am-hide-sm-only">{{$k->memo}}</td>--}}
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            {{--共{{$cursor->count()}}条记录--}}
                            <div class="am-fr">
                                <ul class="am-pagination">
                                    <li class="am-disabled"><a href="#">«</a></li>
                                    <li class="am-active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </div>
    <!-- content end -->
    </div>
    <!--[if lt IE 9]>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{asset('')}}"></script>
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/amazeui.ie8polyfill.min.js')}}"></script>
    <!--<![endif]-->
    <script src="{{asset('js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/amazeui/app.js')}}"></script>
@endsection
