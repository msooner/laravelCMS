@extends('layouts.backend')
@section('content')

    <link rel="stylesheet" href="{{asset('css/switch.css')}}">
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g" style="margin-top:20px ">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a
                                        href="#">新增</a>
                            </button>
                            </button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> <a
                                        href="">删除</a>
                            </button>
                        </div>
                    </div>
                </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th class="table-title">版本号</th>
                                <th class="table-title">开关</th>
                                <th class="table-set">操作(开为0，关为1)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($switches as $v)
                            <tr>
                                <td class="am-hide-sm-only">{{$v->id}}</td>
                                <td class="am-hide-sm-only"><a href="#">{{$v->version}}</a></td>
                                <td class="am-hide-sm-only"><a href="#">{{$v->switch}}</a></td>

                                <td>

                                            <a href="{{url('admin/switch/0/by/'.$v->id)}}"><button type="button" class="btn btn-primary select" style="background: red;">
                                                开</button></a>
                                            <a href="{{url('admin/switch/1/by/'.$v->id)}}"> <button type="button" class="btn btn-primary select" style="background: blue;">
                                                关</button></a>

                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>

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
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/amazeui.ie8polyfill.min.js')}}"></script>
    <!--<![endif]-->
    <script src="{{asset('js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/amazeui/app.js')}}"></script>
    <script src="{{asset('js/SimpleSwitch.min.js')}}"></script>

@endsection
