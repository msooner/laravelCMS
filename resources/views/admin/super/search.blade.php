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
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> <a
                                        href="">待审核</a>
                            </button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> <a
                                        href="">删除</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="am-u-sm-12 am-u-md-3" >
                    <div  style="width: 450px;">
                        <form  action="{{url('admin/search')}}" method="post">
                            {{csrf_field()}}
                            <input type="text"  name="keyword" style="height:37px">
                            <input type="submit" value="搜索" class="am-btn am-btn-default">
                        </form>

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
                            @foreach($superUser as $v)
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>{{$v->id}}</td>
                                    <td><a href="#">{{$v->name}}</a></td>
                                    <td>{{$v->email}}</td>
                                    <td class="am-hide-sm-only">{{$v->phoneNum}}</td>

                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                                            class="am-icon-pencil-square-o"></span><a
                                                            href="{{url('admin/usersEdit/'.$v->id)}}">编辑</a>
                                                </button>
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                    <span class="am-icon-trash-o"></span> <a
                                                            href="{{url('admin/usersDel/'.$v->id)}}">删除</a>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共{{$superUser->count()}}条记录
                            <div class="am-fr">
                                {{$superUser->links()}}
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
