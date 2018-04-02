@extends('layouts.backend')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g" style="margin-top:20px ">

                <div class="am-u-sm-12 am-u-md-3" style="margin-left: 30%">
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
                                <th class="table-author am-hide-sm-only">ID</th>
                                <th class="table-author am-hide-sm-only">产品名称</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $v)
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td><a href="#">{{$v->pid}}</a></td>
                                    <td>{{$v->product_name}}</td>
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                                            class="am-icon-pencil-square-o"></span> 编辑
                                                </button>
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                    <span class="am-icon-trash-o"></span> 删除
                                                </button>
                                                <button class="am-btn am-btn-default am-btn-xs am-text-success am-hide-sm-only">
                                                    <span class="am-icon-pencil-square-o"></span> 显示
                                                </button>
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                    <span class="am-icon-pencil-square-o"></span> 隐藏
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共 2 条记录
                            <div class="am-fr">

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
    <!--<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>-->
    <!--<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/amazeui.ie8polyfill.min.js')}}"></script>
    <!--<![endif]-->
    <script src="{{asset('js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/amazeui/app.js')}}"></script>
@endsection
