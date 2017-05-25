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
	<link href="{{URL::asset('css/amazeui.min.css')}}"  rel="stylesheet">
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



				<li >
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
				<li >
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


				<li class="active">
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



						<div class="widget-content">



							<div class="tabbable">


								<br>


								<!-- content start -->
								<div class="admin-content">
									<div class="admin-content-body">
										<div class="am-cf am-padding am-padding-bottom-0">
											<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章管理</strong> / <small>Article</small></div>
										</div>

										<hr>

										<div class="am-g">
											<div class="am-u-sm-12 am-u-md-6">
												<div class="am-btn-toolbar">
													<div class="am-btn-group am-btn-group-xs">
														<button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
														<button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
														<button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
														<button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
													</div>
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
															<th class="table-check"><input type="checkbox" /></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">类别</th><th class="table-author am-hide-sm-only">作者</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-set">操作</th>
														</tr>
														</thead>
														<tbody>

														<tr>
															<td><input type="checkbox" /></td>
															<td>12</td>
															<td><a href="#">Business management</a></td>
															<td>default</td>
															<td class="am-hide-sm-only">测试1号</td>
															<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
															<td>
																<div class="am-btn-toolbar">
																	<div class="am-btn-group am-btn-group-xs">
																		<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
																		<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
																		<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td><input type="checkbox" /></td>
															<td>13</td>
															<td><a href="#">Business management</a></td>
															<td>default</td>
															<td class="am-hide-sm-only">测试1号</td>
															<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
															<td>
																<div class="am-btn-toolbar">
																	<div class="am-btn-group am-btn-group-xs">
																		<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
																		<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
																		<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td><input type="checkbox" /></td>
															<td>14</td>
															<td><a href="#">Business management</a></td>
															<td>default</td>
															<td class="am-hide-sm-only">测试14号</td>
															<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
															<td>
																<div class="am-btn-toolbar">
																	<div class="am-btn-group am-btn-group-xs">
																		<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
																		<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
																		<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td><input type="checkbox" /></td>
															<td>15</td>
															<td><a href="#">Business management</a></td>
															<td>default</td>
															<td class="am-hide-sm-only">测试1号</td>
															<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
															<td>
																<div class="am-btn-toolbar">
																	<div class="am-btn-group am-btn-group-xs">
																		<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
																		<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
																		<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
																	</div>
																</div>
															</td>
														</tr>
														</tbody>
													</table>
													<div class="am-cf">
														共 15 条记录
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
													<hr />

												</form>
											</div>

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
