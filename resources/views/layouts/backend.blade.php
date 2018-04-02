<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('css/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('css/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('css/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/amazeui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{asset('admin/index')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>PUPU</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>PUPUPU</b>LA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have # messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{asset('img/user3-128x128.jpg')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{asset('img/user4-128x128.jpg')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{asset('img/user3-128x128.jpg')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{asset('img/user4-128x128.jpg')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li><!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{auth('PUPU')->user()->avatar}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{auth('PUPU')->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{auth('PUPU')->user()->avatar}}" class="img-circle" alt="User Image">
                                <p>
                                    {{ auth('PUPU')->user()->name}} - {{auth('PUPU')->user()->phoneNum }}
                                    <small>{{ date('Y-m-d,H:i:s') }}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{url('admin/profile')}}" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{url('admin/logout')}}" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{asset('admin/dash')}}">
                        <i class="fa fa-dashboard"></i> <span>概况</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-group"></i>
                        <span>管理员管理</span>
                        <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('admin/roles')}}"><i class="fa fa-circle-o text-aqua"></i>角色管理</a></li>
                        <li><a href="{{url('admin/permissions')}}"><i class="fa fa-circle-o text-aqua"></i>权限管理</a></li>
                        <li><a href="{{url('admin/superUsers')}}"><i class="fa fa-circle-o text-aqua"></i>管理员列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{asset('admin/users')}}">
                        <i class="fa fa-user"></i> <span>用户管理</span>
                        <span class="pull-right-container">
                            {{--@if()--}}
              <small class="label pull-right bg-green">new</small>
                                {{--@endif--}}
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-product-hunt"></i>
                        <span>产品管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                    <ul class="treeview-menu">
                        <li><a href="{{asset('admin/products')}}"><i class="fa fa-circle-o"></i> 产品列表</a></li>
                        <li><a href="{{asset('admin/products.create')}}"><i class="fa fa-circle-o"></i> 增加产品</a></li>
                        <li><a href="{{asset('admin/products.check')}}"><i class="fa fa-circle-o"></i> 产品审核</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-laptop"></i>
                        <span>商品管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('admin/goods')}}"><i class="fa fa-circle-o"></i>商品列表</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-phone"></i><span>短信管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                    <ul class="treeview-menu">
                        <li><a href="{{asset('admin/messages')}}"><i class="fa fa-circle-o"></i> 发送历史</a></li>
                        <li><a href="{{asset('admin/messages/response')}}"><i class="fa fa-circle-o"></i> 短信回复</a></li>
                        <li><a href="{{asset('admin/messages/sum')}}"><i class="fa fa-circle-o"></i> 发送统计</a></li>
                    </ul>
                </li>
                {{--<li>--}}
                    {{--<a href="{{asset('admin/services')}}">--}}
                        {{--<i class="fa fa-female"></i> <span>客服接入</span>--}}
                        {{--<span class="pull-right-container">--}}
            {{--</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{asset('admin/mails')}}">
                        <i class="fa fa-envelope"></i> <span>邮件管理</span>
                        <span class="pull-right-container">
              {{--<small class="label pull-right bg-yellow">12</small>--}}
            </span>
                    </a>
                </li>
                {{--<li><a href="{{asset('admin/orders')}}">--}}
                        {{--<i class="fa fa-folder"></i> <span>订单管理</span>--}}
                    {{--</a></li>--}}
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-gear"></i>
                        <span>系统管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                    <ul class="treeview-menu">
                        <li><a href="{{asset('admin/errors')}}"><i class="fa fa-circle-o"></i> 错误日志</a></li>
                    </ul>

                </li>

            </ul>
        </section>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.1.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="https://www.pupupula.com">PUPUPULA</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('js/raphael.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/daterangepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('js/gt.js')}}"></script>
</body>
</html>
