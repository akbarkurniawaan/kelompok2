<!DOCTYPE html>
<html lang="en">



<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UPT</title>
	<link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="{{ URL::route('upt') }}">
			  		UPT
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">


					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{asset('images/user.png')}}" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="{{ URL::route('upt') }}">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							
							<li>
								<a href="{{ URL::route('prodi') }}">
									<i class="menu-icon icon-tasks"></i>
									Prodi

								</a>
							</li>

							<li>
								<a href="{{ URL::route('tahun_ajaran') }}">
									<i class="menu-icon icon-tasks"></i>
									Tahun Ajaran

								</a>
							</li>

							<li>
								<a href="{{ URL::route('ruangan') }}">
									<i class="menu-icon icon-tasks"></i>
									Ruangan
								</a>
							</li>

							<li>
								<a href="{{ URL::route('penjadwalan') }}">
									<i class="menu-icon icon-tasks"></i>
									Penjadwalan
								</a>
							</li>
						</ul><!--/.widget-nav-->



						<ul class="widget widget-menu unstyled">
	
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>UPT</h3>
							</div>
                   			 @yield('content')
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>



	<script src="{{asset('scripts/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('scripts/jquery-ui-1.10.1.custom.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('scripts/datatables/jquery.dataTables.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>