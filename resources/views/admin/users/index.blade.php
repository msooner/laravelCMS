@extends('layouts.backend')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g" style="margin-top:20px ">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a
                                        href="{{url('admin/usersCreate')}}">新增</a>
                            </button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> <a href="">待审核</a>
                            </button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> <a href="">删除</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-form-group">
                        <select data-am-selected="{btnSize: 'sm'}">
                            <option value="option1">所有类别</option>
                        </select>
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
                                <th class="table-title">姓名</th>
                                <th class="table-type">邮箱</th>
                                <th class="table-author am-hide-sm-only">手机号</th>
                                {{--<th class="table-date am-hide-sm-only">注册日期</th>--}}
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $v)
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>{{$v->uid}}</td>
                                    <td><a href="#">{{$v->user_name}}</a></td>
                                    <td>{{$v->email}}</td>
                                    <td class="am-hide-sm-only">{{$v->phone_num}}</td>
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
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共{{$users->count()}}条记录
                            <div class="am-fr">
                                {{$users->links()}}
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
