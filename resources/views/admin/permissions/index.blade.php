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
                                        href="{{url('admin/create.permission')}}">新增</a>
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
                                <th class="table-id">ID</th>
                                <th class="table-title">名称</th>
                                <th class="table-type">标签</th>
                                <th class="table-author am-hide-sm-only">权限范围</th>
                                <th>创建日期</th>
                                <th class="table-set">是否启用</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            @foreach($permission as $v)
                            <tbody>
                            <tr>
                                <td>{{$v->id}}</td>
                                <td><a href="#">{{$v->name}}</a></td>
                                <td>{{$v->title}}</td>
                                <td class="am-hide-sm-only">{{$v->scope}}</td>
                                <td >{{$v->created_at}}</td>
                                <td class="am-hide-sm-only">
                                  是
                                </td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                                        class="am-icon-pencil-square-o"></span> <a href="{{url('admin/edit.permission/'.$v->id)}}">编辑</a>
                                            </button>
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                <span class="am-icon-trash-o"></span> <a href="{{url('admin/deleted.permission/'.$v->id)}}">删除</a>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                @endforeach
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
    <script src="{{asset('')}}"></script>
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/amazeui.ie8polyfill.min.js')}}"></script>
    <!--<![endif]-->
    <script src="{{asset('js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/amazeui/app.js')}}"></script>
@endsection
