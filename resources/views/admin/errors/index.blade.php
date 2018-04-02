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
                                <th class="table-check"><input type="checkbox"/></th>
                                <th class="table-id">ID</th>
                                <th class="table-title">错误日志</th>
                                {{--<th class="table-type">事件</th>--}}
                                {{--<th class="table-author am-hide-sm-only">手机号</th>--}}
                                <th class="table-date am-hide-sm-only">日期</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>fff</td>
                                    <td><a href="#">ffffffff</a></td>
                                    <td class="am-hide-sm-only">ffffffffff</td>
                                    {{--<td class="am-hide-sm-only">{{$v->created_at}}</td>--}}
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                                            class="am-icon-pencil-square-o"></span><a
                                                            href="{{url('admin/usersEdit')}}">编辑</a>
                                                </button>
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                    <span class="am-icon-trash-o"></span> <a
                                                            href="{{url('admin/usersDel')}}">删除</a>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="am-cf">
                            共2条记录
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
