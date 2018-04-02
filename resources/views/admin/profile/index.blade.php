@extends('layouts.backend')
@section('content')
    <link rel="stylesheet" href="{{asset('css/webuploader.css')}}">

    <div class="am-cf admin-main">
        <!-- content start -->
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> /
                        <small>Personal information</small>
                    </div>
                </div>
                <hr/>

                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-4 ">
                            <div class="am-panel am-panel-default">
                                <div class="am-panel-bd">
                                    <div class="am-g">
                                        <div class="am-u-md-4">
                                            <img class="am-img-circle am-img-thumbnail"
                                                 src="{{auth('PUPU')->user()->avatar}}"/>
                                        </div>
                                        <div class="am-u-md-8 am-u-md-push-1">
                                            <p>修改头像 </p>
                                            <form class="am-form" method="post" action="{{url('admin/upload')}}"
                                                  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="am-form-group">
                                                    <input type="file" id="user-pic" name="avatar">
                                                    <p class="am-form-help">请选择要上传的头像...</p>
                                                    <input type="submit" class="am-btn am-btn-success" value="修改" >
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="am-u-sm-12 am-u-md-8 ">
                            <form class="am-form am-form-horizontal">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" value="{{auth('PUPU')->user()->name}}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
                                    <div class="am-u-sm-9">
                                        <input type="email" id="user-email" value="{{auth('PUPU')->user()->email}}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">职位 / Positions</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel" id="user-phone" value="">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">签名 / Intro</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro" value=""></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <!-- content end -->
    </div>
    <a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
       data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
    <script src="{{asset('js/webuploader.js')}}"></script>

@endsection