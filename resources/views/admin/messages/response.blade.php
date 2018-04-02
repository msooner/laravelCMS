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
                                <th class="table-type">手机号</th>
                                <th class="table-author am-hide-sm-only">消息</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursor as $v=>$k)
                                <tr>
                                    <td>{{$k->mobile}}</td>
                                    <td class="am-hide-sm-only">{{$k->message}}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            {{--共{{$cursor->count()}}条记录--}}
                          
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
