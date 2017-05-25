<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>In客后台管理系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">



</head>

<body>

<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="index.html">
                IN客笔记管理后台
            </a>

            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog"></i>
                            我的账户
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">账户设置</a></li>
                            <li><a href="javascript:;">账户帮助</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>

            </div><!--/.nav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->





<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <ul class="mainnav">

                <li>
                    <a href="{{URL::asset('admin/index')}}">
                        <i class="icon-home"></i>
                        <span>首页</span>
                    </a>
                </li>



                <li class="active">
                    <a href="{{URL::asset('user/index')}}">
                        <i class="icon-user"></i>
                        <span>用户管理</span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::asset('category/index')}}">
                        <i class="icon-folder-open"></i>
                        <span>类别管理</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::asset('article/index')}}">
                        <i class="icon-paperclip"></i>
                        <span>文章管理</span>
                    </a>
                </li>


                <li>
                    <a href="{{URL::asset('system/index')}}">
                        <i class="icon-link"></i>
                        <span>系统设置</span>
                    </a>
                </li>


                <li>
                    <a href="{{URL::asset('mail/index')}}">
                        <i class="icon-envelope"></i>
                        <span>邮件管理</span>
                    </a>
                </li>



            </ul>

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->


<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3>增加用户</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">



                            <div class="tabbable">

                                <br>
                                <div >
                                    <div class="tab-pane" id="formcontrols">
                                        <div class="panel-body">
                                            <form class="form-horizontal" role="form" method="POST" action="{{URL::asset('user/add')}}">
                                                {{ csrf_field() }}

                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-4 control-label">Name</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Password</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4"style="padding-left: 300px;">
                                                        <button type="submit" class="btn btn-primary">
                                                            Register
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                </div>



                            </div>





                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span8 -->




            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->




<div class="extra">

    <div class="extra-inner">

        <div class="container">

            <div class="row">
                <div class="span3">
                    <h4>
                        About Free Admin Template</h4>
                    <ul>
                        <li><a href="javascript:;">EGrappler.com</a></li>
                        <li><a href="javascript:;">Web Development Resources</a></li>
                        <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                        <li><a href="javascript:;">Free Resources and Scripts</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
                <div class="span3">
                    <h4>
                        Support</h4>
                    <ul>
                        <li><a href="javascript:;">Frequently Asked Questions</a></li>
                        <li><a href="javascript:;">Ask a Question</a></li>
                        <li><a href="javascript:;">Video Tutorial</a></li>
                        <li><a href="javascript:;">Feedback</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
                <div class="span3">
                    <h4>
                        Something Legal</h4>
                    <ul>
                        <li><a href="javascript:;">Read License</a></li>
                        <li><a href="javascript:;">Terms of Use</a></li>
                        <li><a href="javascript:;">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
                <div class="span3">
                    <h4>
                        Open Source jQuery Plugins</h4>
                    <ul>
                        <li><a href="">Open Source jQuery Plugins</a></li>
                        <li><a href="">HTML5 Responsive Tempaltes</a></li>
                        <li><a href="">Free Contact Form Plugin</a></li>
                        <li><a href="">Flat UI PSD</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /extra-inner -->

</div> <!-- /extra -->




<div class="footer">

    <div class="footer-inner">

        <div class="container">

            <div class="row">

                <div class="span12">
                    &copy; 2013 <a href="#">Bootstrap Responsive Admin Template</a>.
                </div> <!-- /span12 -->

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /footer-inner -->

</div> <!-- /footer -->



<script src="{{URL::asset('js/jquery-1.7.2.min.js')}}"></script>

<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/base.js')}}"></script>


</body>

</html>
