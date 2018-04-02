@extends('layouts.backend')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g" style="margin-top:20px ">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">

                    </div>
                </div>

                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field">
                        <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
                    </div>
                </div>
            </div>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-title">错误码</th>
                                <th class="table-title">错误日志</th>
                                {{--<th class="table-type">事件</th>--}}
                                {{--<th class="table-author am-hide-sm-only">手机号</th>--}}
                                <th class="table-date am-hide-sm-only">来源</th>
                                <th class="table-set">时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursor as $v=>$k)
                                <tr>
                                    {{--<td>{{$k->message}}</td>--}}
                                    <td>{{$k->level}}</td>
                                    <td><a href="{{url('admin/logs/info')}}" alt="点击显示详情">{{$k->level_name}}</a></td>
                                    <td>{{$k->channel}}</td>
                                    <td>{{$k->datetime}}</td>
                                    {{--<td class="am-hide-sm-only">{{$v->created_at}}</td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">

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
