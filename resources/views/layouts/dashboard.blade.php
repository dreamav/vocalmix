<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>AvocadoPanel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Styles -->
  	<link href='{{asset('css/chosen.css')}}' rel='stylesheet' tyle="text/css">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/theme/avocado.css')}}" rel="stylesheet" type="text/css" id="theme-style">
	<link href="{{asset('css/prism.css')}}" rel="stylesheet/less" type="text/css">
	<link href='{{asset('css/fullcalendar.css')}}' rel='stylesheet' tyle="text/css">
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
	<style type="text/css">
		body { padding-top: 102px; }
	</style>
	<link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
	
	<!-- JavaScript/jQuery, Pre-DOM -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="{{asset('js/charts/excanvas.min.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.js')}}"></script>
	<script src="{{asset('js/jquery.jpanelmenu.min.js')}}"></script>
	<script src="{{asset('js/jquery.cookie.js')}}"></script>
	<script src="{{asset('js/avocado-custom-predom.js')}}"></script>

	<!-- HTML5, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<!-- Top Fixed Bar -->
	<div class="navbar navbar-inverse navbar-fixed-top">

		<!-- Top Fixed Bar: Navbar Inner -->
		<div class="navbar-inner">

			<!-- Top Fixed Bar: Container -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<a href="#">
					<button type="button" class="btn btn-navbar mobile-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</a>
				<!-- / Mobile Menu Button -->

				<!-- / Logo / Brand Name -->
				<a class="brand" href="#"><i class="icon-leaf"></i> Avocado<b>Panel</b></a>
				<!-- / Logo / Brand Name -->

				<!-- User Navigation -->
				<ul class="nav pull-right">
					
					<!-- User Navigation: Notifications -->
					<li class="dropdown">

						<!-- User Navigation: Notifications Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-align-justify icon-white"></i>
							<span class="hidden-phone"> Notifications </span>
							<span class="badge badge-inverse">16</span>
						</a>
						<!-- / User Navigation: Notifications Link -->

						<!-- User Navigation: Notifications Dropdown -->
						<ul class="dropdown-menu widget">

							<!-- User Navigation: Notifications Top -->
							<li>

								<!-- User Navigation: Notifications Add News -->
								<a href="#" class="send" rel="tooltip" title="Add News"><i class="icon-edit"></i></a>
								<!-- / User Navigation: Notifications Add News -->

								<!-- User Navigation: Notifications Header -->
								<h2><i class="icon-align-justify"></i> Notifications 
								<span class="badge badge-light small">16</span></h2>
								<!-- / User Navigation: Notifications Header -->
							</li>
							<!-- / User Navigation: Notifications Top -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>1 hour ago</small>
									<p><i class="icon-edit"></i> <b>You</b> added <b>We´ve launched!</b></p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>6 hour ago</small>
									<p><i class="icon-edit"></i> <b>You</b> added <b>Some changes</b></p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>12 hour ago</small>
									<p><i class="icon-envelope"></i> <b>Jason</b> sendt you a message</p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>15 hour ago</small>
									<p><i class="icon-user"></i> <b>Kate</b> added you as friend</p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications View All -->
							<li><a href="#" class="text-center"><i class="icon-inbox"></i> View All Notifications</a></li>
							<!-- / User Navigation: Notifications View All -->

						</ul>
						<!-- / User Navigation: Notifications Dropdown -->

					</li>
					<!-- / User Navigation: Notifications -->

					<!-- User Navigation: Messages -->
					<li class="dropdown">

						<!-- User Navigation: Messages Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-envelope icon-white"></i>
							<span class="hidden-phone"> Messages </span>
							<span class="badge badge-inverse">5</span>
						</a>
						<!-- / User Navigation: Messages Link -->

						<!-- / User Navigation: Messages Dropdown -->
						<ul class="dropdown-menu widget">

							<!-- User Navigation: Messages Top -->
							<li>

								<!-- User Navigation: Messages New Message -->
								<a href="#" class="send" rel="tooltip" title="New Message"><i class="icon-edit"></i></a>
								<!-- / User Navigation: Messages New Message -->

								<!-- User Navigation: Messages Header -->
								<h2><i class="icon-envelope"></i> Messages <span class="badge badge-light small">6</span></h2>
								<!-- / User Navigation: Messages Header -->

							</li>
							<!-- / User Navigation: Messages Top -->

							<!-- User Navigation: Messages Message -->
							<li>
								<a href="#" class="message">
									<small>1 hour ago</small>
									<h3><i class="icon-user"></i> Jason</h3>
									<p>Keep up the work! </p>
								</a>
							</li>
							<!-- / User Navigation: Messages Message -->

							<!-- User Navigation: Messages Message -->
							<li>
								<a href="#" class="message">
									<small>3 hour ago</small>
									<h3><i class="icon-user"></i> Janika</h3>
									<p>Did you update that thing? </p>
								</a>
							</li>
							<!-- / User Navigation: Messages Message -->

							<!-- User Navigation: Messages View All Messages -->
							<li>
								<a href="#" class="text-center">
									<i class="icon-inbox"></i> View All Messages
								</a>
							</li>
							<!-- / User Navigation: Messages View All Messages -->

						</ul>
						<!-- / User Navigation: Messages Dropdown -->

					</li>
					<!-- / User Navigation: Messages -->

					<!-- User Navigation: User -->
					<li class="dropdown">

						<!-- User Navigation: User Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user icon-white"></i> 
							<span class="hidden-phone">Janika</span>
						</a>
						<!-- / User Navigation: User Link -->

						<!-- User Navigation: User Dropdown -->
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Profile</a></li>
							<li><a href="#settings" data-toggle="modal"><i class="icon-cog"></i> Settings</a></li>
							<li><a href="#messages" data-toggle="modal"><i class="icon-envelope"></i> Messages</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-off"></i> Logout</a></li>
						</ul>
						<!-- / User Navigation: User Dropdown -->

					</li>
					<!-- / User Navigation: User -->

				</ul>
				<!-- / User Navigation -->

			</div>
			<!-- / Top Fixed Bar: Container -->

		</div>
		<!-- / Top Fixed Bar: Navbar Inner -->

		<!-- Top Fixed Bar: Breadcrumb -->
		<div class="breadcrumb clearfix">

			<!-- Top Fixed Bar: Breadcrumb Container -->
			<div class="container">

				<!-- Top Fixed Bar: Breadcrumb Location -->
				<ul class="pull-left">
					<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li class="active"><a href="#"><i class="icon-align-justify"></i> Dashboard</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Location -->

				<!-- Top Fixed Bar: Breadcrumb Right Navigation -->
				<ul class="pull-right">

					<!-- Top Fixed Bar: Breadcrumb Theme -->
					<li class="dropdown">
						<!-- Top Fixed Bar: Breadcrumb Theme Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Theme</a>

						<!-- Top Fixed Bar: Breadcrumb Theme Dropdown -->
						<ul class="dropdown-menu" id="theme">
							<li><a href="#" data-style="avocado" class="active"><i class="icon-circle"></i> Avocado</a></li>
							<li><a href="#" data-style="strawberry"><i class="icon-circle"></i> Strawberry</a></li>
							<li><a href="#" data-style="blueberry"><i class="icon-circle"></i> Blueberry</a></li>
							<li><a href="#" data-style="azalea"><i class="icon-circle"></i> Azalea</a></li>
							<li><a href="#" data-style="tangerine"><i class="icon-circle"></i> Tangerine</a></li>
						</ul>
						<!-- / Top Fixed Bar: Breadcrumb Theme Dropdown -->

					</li>
					<!-- / Top Fixed Bar: Breadcrumb Theme -->

					<li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Right Navigation -->

			</div>
			<!-- / Top Fixed Bar: Breadcrumb Container -->

		</div>
		<!-- / Top Fixed Bar: Breadcrumb -->

	</div>
	<!-- / Top Fixed Bar -->

	<!-- Moldule: Settings -->
	<div id="settings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-cog"></i> Account settings</h3>
		</div>

		<div class="modal-body">

			<form class="form-horizontal">
		
				<div class="control-group">
					<label class="control-label" for="inputName"><i class="icon-user"></i> Name</label>
					<div class="controls">
						<input type="text" id="inputName" placeholder="Name">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputUsername"><i class="icon-user"></i> Username</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Username">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
					<div class="controls">
						<input type="password" id="inputPassword" placeholder="Password">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputRepeat"><i class="icon-key"></i> Repeat Password</label>
					<div class="controls">
						<input type="password" id="inputRepeat" placeholder="Password">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
					<div class="controls">
						<input type="text" id="inputEmail" placeholder="Email">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputWebsite"><i class="icon-home"></i> Website</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Website">
					</div>
				</div>
						 
		</div>

		<div class="modal-footer">

			<button class="btn btn-primary">Save changes</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>

		</div>

	</div> 
	<!-- / Module: Settings -->

	<!-- Module: Messages -->
	<div id="messages" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-comment"></i> Messages</h3>
		</div>

		<div class="modal-body no-padding">
		
			<div class="list-widget">

				<div class="item">
					<small class="pull-right">2 hours ago</small>
					<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
					<p>This panel is so cool!</p>
				</div>
			
				<div class="item">
					<small class="pull-right">6 hours ago</small>
					<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
					<p>Look at this stuff I made!</p>
				</div>

				<div class="item">
					<small class="pull-right">8 hours ago</small>
					<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
					<p>I'll make this admin panel holy as swiss cheese.</p>
				</div>

			</div>

		</div>

		<div class="modal-footer">

			<a href="#newmessage" class="btn btn-primary" data-dismiss="modal" data-toggle="modal">New mesaage</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		</div>

	</div>
	<!-- / Module: Messages -->
	 
	<!-- Module: New Messages -->
	<div id="newmessage" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-comment"></i> New Message</h3>
		</div>

		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputName"> </label>
				<div class="controls">
					<input type="text" id="inputName" placeholder="Recipient">
				</div>
			</div>
			
			<!-- Textarea -->
			<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">

				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
					</ul>
				</div>

				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
					<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
					<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
					<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
					<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
					<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
				</div>
				
				<div class="btn-group">
					<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
					<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
				</div>

			</div>

			<div id="sendmessage"></div>
			<!-- /Textarea -->

		</div>
		<div class="modal-footer">

			<button class="btn btn-primary">Send Message</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		</div>

	</div>
	<!-- / Module: New Messages -->

	<!-- Content Container -->
	<div class="container">

		<!-- Main Navigation: Box -->
		<div class="navbar navbar-inverse" id="nav">

			<!-- Main Navigation: Inner -->
			<div class="navbar-inner">

				<!-- Main Navigation: Nav -->
				<ul class="nav">

					<!-- Main Navigation: Dashboard -->
					<li class="active"><a href="index-2.html"><i class="icon-align-justify"></i> Dashboard</a></li>
					<!-- / Main Navigation: Dashboard -->

					<!-- Main Navigation: General -->
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th"></i> General <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="grid.html"><i class="icon-th"></i> Grid</a></li>
								<li><a href="icons.html"><i class="icon-circle"></i> Icons</a></li>
								<li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
								<li><a href="buttons.html"><i class="icon-circle-blank"></i> Buttons</a></li>
							</ul>
					</li>
					<!-- / Main Navigation: General -->

					<!-- Main Navigation: UI Elements -->
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-magic">
								</i> UI Elements <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="forms.html"><i class="icon-check"></i> Forms</a></li>
								<li><a href="wysiwyg.html"><i class="icon-edit"></i> WYSIWYG</a></li>
								<li><a href="tabs.html"><i class="icon-th-large"></i> Tabs / Accordion</a></li>
							</ul>
					</li>
					<!-- / Main Navigation: UI Elements -->

					<!-- Main Navigation: Components -->
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th-large"></i> Components <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
								<li><a href="maps.html"><i class="icon-map-marker"></i> Maps</a></li>
								<li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
								<li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>
								<li><a href="login.html"><i class="icon-key"></i> Login</a></li>
								<li class="dropdown-submenu">
									<a href="#"><i class="icon-signin"></i> Sub-Menu</a>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-signout"></i> This</a></li>
										<li><a href="#"><i class="icon-sitemap"></i> Is</a></li>
										<li><a href="#"><i class="icon-share-alt"></i> An</a></li>
										<li><a href="#"><i class="icon-reorder"></i> Example</a></li>
									</ul>
								</li>
							</ul>
					</li>
					<!-- / Main Navigation: Components -->

					<!-- Main Navigation: Gallery -->
					<li><a href="gallery.html"><i class="icon-picture"></i> Gallery</a></li>
					<!-- / Main Navigation: Gallery -->

				</ul>
				<!-- / Main Navigation: Nav -->
			
				<!-- Main Navigation: Search -->
				<form class="navbar-search pull-right">
					<input type="text" class="search-query typeahead" placeholder="Search">
				</form>
				<!-- / Main Navigation: Search -->

			</div>
			<!-- / Main Navigation: Inner -->

		</div>
		<!-- / Main Navigation: Box -->

		<!-- Alert -->
		<div class="alert alert-light">
			<a class="close" data-dismiss="alert">&times;</a>
			<i class="icon-comment"></i> Welcome back, <b>Janika</b>. We have missed you!
		</div>
		<!-- / Alert -->

		<!-- Information Boxes -->
		<div class="row-fluid">

			<!-- Information Boxes: Users Registered -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-user"></i>
				<div class="pull-right text-right">
					Users Registered<br>
					<b class="huge">175</b><br>
					<span class="caps muted">Today</span>
				</div>
			</div>
			<!-- / Information Boxes: Users Registered -->

			<!-- Information Boxes: Active Users -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-rss"></i>
				<div class="pull-right text-right">
					Subscribers<br>
					<b class="huge">3432</b><br>
					<span class="caps muted">+25 Today</span>
				</div>
			</div>
			<!-- / Information Boxes: Active Users -->

			<!-- Information Boxes: Images -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-picture"></i>
				<div class="pull-right text-right">
					Images<br>
					<b class="huge">4343</b><br>
					<span class="caps muted">+5 Today</span>
				</div>
			</div>
			<!-- / Information Boxes: Images -->
			
			<!-- Information Boxes: Applications -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-pencil"></i>
				<div class="pull-right text-right">
					Applications<br>
					<b class="huge">34</b><br>
					<span class="caps muted">Installed</span>
				</div>
			</div>
			<!-- / Information Boxes: Applications -->

		</div>
		<!-- / Information Boxes -->

		<!-- Site Traffic and Pie -->
		<div class="row-fluid">

			<!-- Site Traffic: Box -->
			<div class="span8">

				<!-- Site Traffic: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#tab-traffic"><i class="icon-bar-chart"></i> Site Traffic</a></li>
					  <li><a href="#tab-server"><i class="icon-cogs"></i> Server Status</a></li>
					</ul>
				</div>
				<!-- / Site Traffic: Top Bar -->

				<!-- Site Traffic: Content -->
				<div class="well">

					<div class="tab-content">

					  <div class="tab-pane active" id="tab-traffic">

						  	<div class="progress progress-mini">
							<div class="bar" style="width: 15%;"></div>
							</div>

							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<i class="icon-bolt"></i> <b>Last Update</b> Traffic was last updated 3 hours ago.
							</div>

							<div class="graph chart1"></div>

						</div>
						  
						<div class="tab-pane" id="tab-server">

							<div class="progress progress-danger progress-mini">
							<div class="bar" style="width: 98%;"></div>
							</div>

							<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<i class="icon-bolt"></i> <b>Huge Traffic</b> Your server has nearly exceeded the bandwidth limits.
							</div>

							<div class="graph realtimechart"></div>
						
						</div>

					</div>

				</div>
				<!-- / Site Traffic: Content -->

			</div>
			<!-- / Site Traffic: Box -->
			
			<!-- Pie: Box -->
			<div class="span4">

				<!-- Pie: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-money"></i> Earnings</h3>
				</div>
				<!-- / Pie: Top Bar -->

				<!-- Pie: Content -->
				<div class="well">

					<div class="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<i class="icon-star"></i> <b>Income Update</b> Your income has gone up by 74% the last week.
					</div>

					<div class="pie pie1"></div>

				</div>
				<!-- / Pie: Content -->

			</div>
			<!-- / Pie -->
			
		</div>
		<!-- / Site Traffic and Pie -->

		<!-- Create Account and Messages -->
		<div class="row-fluid">

			<!-- Create Account: Box -->
			<div class="span8">

				<!-- Create Account: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#user-overview"><i class="icon-user"></i> Users Overview</a></li>
					  <li><a href="#user-create"><i class="icon-user"></i> Create Account</a></li>
					</ul>
				</div>
				<!-- / Create Account: Top Bar -->

				<!-- Create Account: Content -->
				<div class="well no-padding tab-content">
					
					<!-- Create Account: Content User Overview -->
					<div class="tab-pane active" id="user-overview">

					<!-- Create Account: Content User Overview Table -->
						<table class="data-table">
							<thead>
								<tr>
									<th>User</th>
									<th>Group</th>
									<th>Registered</th>
									<th>Status</th>
									<th class="right">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Casper</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-important">banned</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Maya</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-important">banned</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Martyn</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Joakim</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Erik</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Line</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Tim</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Timmie</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Sebastian</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Steinar</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Caroline</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Scott</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Jack</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Jackie</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Nancy</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>George</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Spencer</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Marge</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Jannie</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Julian</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Anne</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Henrik</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-warning">pending</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Bob</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>James</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Dan</td>
									<td>Administrator</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Kasper</td>
									<td>Administrator</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Janika</td>
									<td>Administrator</td>
									<td>05/05/2013</td>
									<td><span class="label label-success">active</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								<tr>
									<td>Paul</td>
									<td>User</td>
									<td>05/05/2013</td>
									<td><span class="label label-important">banned</span></td>
									<td class="right">
										<button type="button" class="btn btn-info">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>User</th>
									<th>Group</th>
									<th>Registered</th>
									<th>Status</th>
									<th class="right">Actions</th>
								</tr>
							</tfoot>
						</table>
						<!-- / Create Account: Content User Overview Table -->

					</div>
					<!-- / Create Account: Content User Overview -->

					<!-- / Create Account: Tab -->   
					<div class="tab-pane" id="user-create">

						<!-- Create Account: Form -->
						<form class="form-horizontal">

							<!-- Create Account: Top Information -->
							<div class="top-info">

								<!-- Alert -->
								<div class="alert alert-info">
									<a class="close" data-dismiss="alert">&times;</a>
									<i class="icon-info"></i> You can add users through this panel
								</div>
								<!-- / Alert -->

							</div>
							<!-- / Create Account: Top Information -->

							<!-- Create Account: Form Name -->
							<div class="control-group">
								<label class="control-label" for="inputName"><i class="icon-user"></i> Name</label>
								<div class="controls">
									<input type="text" id="inputName" placeholder="Name">
								</div>
							</div>
							<!-- / Create Account: Form Name -->

							<!-- Create Account: Form Username -->
							<div class="control-group">
								<label class="control-label" for="inputUsername"><i class="icon-user"></i> Username</label>
								<div class="controls">
									<input type="text" id="inputUsername" placeholder="Username">
								</div>
							</div>
							<!-- / Create Account: Form Username -->

							<!-- Create Account: Form Nationality -->
							<div class="control-group">
								<label class="control-label" for="inputNationality"><i class="icon-flag"></i> Nationality</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputNationality" placeholder="Nationality">
								</div>
							</div>
							<!-- / Create Account: Form Nationality -->

							<!-- Create Account: Form Password -->
							<div class="control-group">
								<label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
								<div class="controls">
									<input type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
							<!-- / Create Account: Form Password -->

							<!-- Create Account: Form Email -->
							<div class="control-group">
								<label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<!-- / Create Account: Form Email -->

							<!-- Create Account: Form Gender -->
							<div class="control-group">
								<label class="control-label" for="inputGender"><i class="icon-user"></i> Gender</label>
								<div class="controls">
									<div class="btn-group" data-toggle="buttons-radio">
										<button type="button" class="btn">Female</button>
										<button type="button" class="btn">Male</button>
									</div>
								</div>
							</div>
							<!-- / Create Account: Form Gender -->

							<!-- Create Account: Form Date of Birth -->
							<div class="control-group">
								<label class="control-label" for="inputDate"><i class="icon-user"></i> Date of Birth</label>
								<div class="controls">
		 
									<select class="span12">
										<option value="Day">Day</option>
										<option value="01">01</option>
										<option value="02">02</option>
									</select>
									<select class="span12">
										<option value="Month">Month</option>
										<option value="January">January</option>
										<option value="February">February</option>
									</select>
									<select class="span12">
										<option value="Year">Year</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
									</select>
								</div>
							</div>
							<!-- / Create Account: Form Date of Birth -->
		 
							<!-- Create Account: Form Actions -->
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Signup</button>
								<button type="button" class="btn">Cancel</button>
							</div>
							<!-- / Create Account: Form Actions -->
		 
						</form> 
						<!-- / Create Account: Form -->   

					</div>
					<!-- / Create Account: Tab -->   

				</div>
				<!-- / Create Account: Content -->

			</div>
			<!-- / Create Account: Box -->

			<!-- Messages: Box -->
			<div class="span4">

				<!-- Messages: Top Bar -->
				<div class="top-bar">
						<h3><i class="icon-envelope"></i> Messages</h3>
				</div>
				<!-- / Messages: Top Bar -->

				<!-- Messages: Content -->
				<div class="well no-padding" id="pagination-messages">
 
					<!-- Messages: Content Messages -->
					<div class="list-widget messages pagination-content">

						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">2 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Working on it!</p>
						</div>
						<!-- / Messages: Content Message -->
				
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">5 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>You better fix that bug already</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">6 hours ago</small>
							<h3><i class="icon-user"></i> Turtle-Kid <span class="label">admin</span></h3>
							<p>I want a turtle!</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->

						<div class="item">
							<small class="pull-right">6 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>I'll make this admin panel holy as swiss cheese.</p>
						</div>
						<!-- / Messages: Content Message -->

						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">7 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Haha, yeah. must be a bug</p>
						</div>
						<!-- / Messages: Content Message -->
				
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">8 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>That was random.</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">14 hours ago</small>
							<h3><i class="icon-user"></i> Turtle-Kid <span class="label">user</span></h3>
							<p>I like turtles.</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->

						<div class="item">
							<small class="pull-right">15 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>Alright, ill start on the html now..</p>
						</div>
						<!-- / Messages: Content Message -->

						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">16 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Sent it over!</p>
						</div>
						<!-- / Messages: Content Message -->
				
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">18 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>You better be done soon!</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">21 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Its nearly done, just need a small tweak.</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->

						<div class="item">
							<small class="pull-right">22 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label label-info">admin</span></h3>
							<p>Have you finished the designs, Kasper?</p>
						</div>
						<!-- / Messages: Content Message -->

					</div>
					<!-- Messages: Content Messages -->

					<!-- Messages: Quick Reply -->
					<form class="list-widget">
	
						<div class="item">
							<div class="input-prepend input-append">
								<span class="add-on"><i class="icon-comment-alt"></i></span>
								<input class="no-margin input-full-width" type="text" placeholder="Quick Reply..">
								<button class="btn" type="button">Post</button>
							</div>
						</div>

					</form>
					<!-- / Messages: Quick Reply -->
					
					<!-- Messages: Content Pagination -->
					<div class="pagination pagination-centered"></div>
					<!-- / Messages: Content Pagination -->
	
				</div>
				<!-- / Messages: Content -->

			</div>
			<!-- Messages: Box -->

		</div>
		<!-- / Create Account and Messages -->

		<!-- Calendar and Todo List -->
		<div class="row-fluid">

			<!-- Calendar Box -->
			<div class="span8">

				<!-- Calendar: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-calendar"></i> Calendar</h3>
				</div>
				<!-- / Calendar: Top Bar -->

				<!-- Calendar: Content -->
				<div class="well">
					
					<div id="calendar"></div>

				</div>
				<!-- / Calendar: Content -->

			</div>
			<!-- / Calendar: Box -->

			<!-- Todo List: Box -->
			<div class="span4">

				<!-- Todo List: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-reorder"></i> Todo List</h3>
				</div>
				<!-- / Todo List: Top Bar -->

				<!-- / Todo List: Content -->
				<div class="well no-padding">
	
					<!-- Todo List: Actual List -->
					<form class="list-widget todo" id="pagination-todo">
	
						<!-- Todo List: Add Item -->
						<div class="item">
							<input class="no-margin input-full-width todo-add" type="text" placeholder="Add an Item...">
						</div>
						<!-- / Todo List: Add Item -->

						<!-- Todo List: Pagination Content -->
						<div class="pagination-content">
		
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
									<label class="checkbox">
										<input type="checkbox"> <i class="icon-food"></i> Buy cake for birthday
								</label>
							</div>
							<!-- / Todo List: Item -->
							 
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-code"></i> Finish the HTML
								</label>
							</div>
							<!-- / Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-film"></i> Watch some movie
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-money"></i> Buy food for dinner
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-food"></i> Eat the dinner
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-code"></i> Continue working on the jQuery
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-glass"></i> Take a break
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-code"></i> Create an awesome app
								</label>
							</div>
							<!-- Todo List: Item -->
		
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
									<label class="checkbox">
										<input type="checkbox"> <i class="icon-film"></i> Stop slacking infront of the TV
								</label>
							</div>
							<!-- / Todo List: Item -->
							 
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-android"></i> Create a robot that can work
								</label>
							</div>
							<!-- / Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-windows"></i> Fix all those IE bugs
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-windows"></i> Continue fixing those IE bugs
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-dribbble"></i> Finish the design tasks
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-filter"></i> Check other designs
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-smile"></i> Take a nap
								</label>
							</div>
							<!-- Todo List: Item -->
							
							<!-- Todo List: Item -->
							<div class="item">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<label class="checkbox">
									<input type="checkbox"> <i class="icon-film"></i> Watch some awesome serie
								</label>
							</div>
							<!-- Todo List: Item -->

						</div>
						<!-- / Todo List: Pagination Content -->
					
						<!-- Todo List: Pagination -->
						<div class="pagination pagination-centered"></div>
						<!-- / Todo List: Pagination -->
	
					</form>
					<!-- / Todo List: Actual List -->
	
				</div>
				<!-- / Todo List: Content -->

			</div>
			<!-- / Todo List: Box -->

		</div>
		<!-- / Calendar and Todo List --> 

		<!-- Add News and Activity -->
		<div class="row-fluid">

			<!-- Add News: Box -->
			<div class="span8">
				<!-- Add News: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-edit"></i> Add News</h3>
				</div>
				<!-- / Add News: Top Bar -->

				<!-- Add News: Content -->
				<div class="well">

					<!-- Add News: WYSIWYG Edior -->
					<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">

						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
								<ul class="dropdown-menu">
								</ul>
						</div>

						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
								<ul class="dropdown-menu">
								<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
								<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
								<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
								</ul>
						</div>

						<div class="btn-group">
							<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
							<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
							<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
							<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
						</div>

						<div class="btn-group">
							<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
							<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
							<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
							<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
						</div>

						<div class="btn-group">
							<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
							<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
							<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
							<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
						</div>

						<div class="btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
							<div class="dropdown-menu input-append">
								<input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
								<button class="btn" type="button">Add</button>
							</div>
							<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>
						</div>
						
						<div class="btn-group">
							<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
							<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
						</div>

						<div class="btn-group">
							<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
							<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
						</div>

					</div>

					<div id="textarea"></div>
					<!-- / Add News: WYSIWYG Edior -->

				</div>
				<!-- / Add News: Content -->

			</div>
			<!-- / Add News: Box -->

			<!-- Activity: Box -->
			<div class="span4">

				<!-- Activity: Top Bar -->
				<div class="top-bar">
						<h3><i class="icon-bolt"></i> Activity</h3>
				</div>
				<!-- / Activity: Top Bar -->

				<!-- Activity: Content -->
				<div class="well no-padding" id="pagination-activity">
 
					<!-- Activity: Content Activity -->
					<div class="list-widget pagination-content">

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">2 hours ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added group <a href="#">Admin</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">4 hours ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added user <a href="#">Phil</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">12 hours ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added user <a href="#">Dan</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">3 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added user <a href="#">Astrid</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">3 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added group <a href="#">Super Users</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">6 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added topic <a href="#">Off-Topic</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">7 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added topic <a href="#">General</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">10 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added topic <a href="#">School</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">12 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Bob</a> added topic <a href="#">Work</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">15 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added user <a href="#">Oliver</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">17 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added user <a href="#">Bob</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">19 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added user <a href="#">Jane</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">19 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added user <a href="#">Tom</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">20 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added user <a href="#">Alice</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">21 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added user <a href="#">Jake</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">21 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Janika</a> added group <a href="#">Common</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">21 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added news <a href="#">Cool!</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->

						<!-- Activity: Content Activity Item -->
						<div class="item">
							<small class="pull-right">22 days ago</small>
							<p class="no-margin"><i class="icon-user"></i> <a href="#">Kasper</a> added group <a href="#">User</a></p>
						</div>
						<!-- / Activity: Content Activity Item -->
					
					</div>
					<!-- / Activity: Content Activity -->
					
					<!-- Activity: Content Activity Pagination -->
					<div class="pagination pagination-centered"></div>
					<!-- / Activity: Content Activity Pagination -->
 
				</div>
				<!-- / Activity: Content -->

			</div>
			<!-- / Activity: Box -->
				
		</div>
		<!-- / Add News and Activity -->

	</div> 
	<!-- / Content Container -->

	<!-- Footer -->
	<footer class="footer">

			<!-- Footer Container -->
      <div class="container">

				<!-- Footer Container: Content -->
        <p>Development and design by <a href="http://themeforest.net/user/LycheeDesigns">Kasper</a> and <a href="http://themeforest.net/user/LycheeDesigns">Janika</a>.</p>
        <p>Copyrighted <a href="http://themeforest.net/user/LycheeDesigns">Lychee Designs</a> 2013. All rights resserved.</p>

        <p><a href="http://fortawesome.github.io/Font-Awesome/">Fontawesome</a> licensed under <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&amp;id=OFL">SIL OFL </a>.</p>

        <ul>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Buy Theme</a></li>
          <li class="muted">·</li>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Lychee</a></li>
          <li class="muted">·</li>
          <li><a href="https://twitter.com/lycheedesigns">Twitter</a></li>
        </ul>
        <!-- / Footer Container: Content -->

      </div>
      <!-- / Footer Container -->

	</footer>
	<!-- / Footer -->

</body>

	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='{{asset('js/jquery.hotkeys.js')}}'></script>
	<script src='{{asset('js/calendar/fullcalendar.min.js')}}'></script>
	<script src="{{asset('js/jquery-ui-1.10.2.custom.min.js')}}"></script>
	<script src="{{asset('js/jquery.pajinate.js')}}"></script>
	<script src="{{asset('js/jquery.prism.min.js')}}"></script>
	<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.time.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/bootstrap/bootstrap-wysiwyg.js')}}"></script>
	<script src="{{asset('js/bootstrap/bootstrap-typeahead.js')}}"></script>
	<script src="{{asset('js/jquery.easing.min.js')}}"></script>
	<script src="{{asset('js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('js/avocado-custom.js')}}"></script>
		
</html>