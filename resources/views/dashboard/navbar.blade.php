@extends('layouts.dashboard')

@section('navbar')
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
			<a class="brand" href="{{ url('/') }}"><i class="icon-music"></i> Vocal<b>Mix</b></a>
			<!-- / Logo / Brand Name -->

			<!-- User Navigation -->
			<ul class="nav pull-right">
				
				<!-- User Navigation: Notifications -->
				{{-- <li class="dropdown">

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

				</li> --}}
				<!-- / User Navigation: Notifications -->

				<!-- User Navigation: Messages -->
				{{--<li class="dropdown">

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

				</li>--}}
				<!-- / User Navigation: Messages -->

				<!-- User Navigation: User -->
				<li class="dropdown">

					<!-- User Navigation: User Link -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user icon-white"></i> 
						<span class="hidden-phone">{{ Auth::user()->name }}</span>
					</a>
					<!-- / User Navigation: User Link -->

					<!-- User Navigation: User Dropdown -->
					<ul class="dropdown-menu">
						{{-- <li><a href="#"><i class="icon-user"></i> Profile</a></li>
						<li><a href="#settings" data-toggle="modal"><i class="icon-cog"></i> Settings</a></li>
						<li><a href="#messages" data-toggle="modal"><i class="icon-envelope"></i> Messages</a></li>
						<li class="divider"></li> --}}
						<li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="icon-off"></i> Logout
                            </a>
                        </li>					
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
				<li><a href="{{ url('/') }}"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
				{{-- <li class="active"><a href="#"><i class="icon-align-justify"></i> Dashboard</a></li> --}}
			</ul>
			<!-- / Top Fixed Bar: Breadcrumb Location -->

			<!-- Top Fixed Bar: Breadcrumb Right Navigation -->
			<ul class="pull-right">

				<!-- Top Fixed Bar: Breadcrumb Theme -->
				{{-- <li class="dropdown">
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

				</li> --}}
				<!-- / Top Fixed Bar: Breadcrumb Theme -->

				<li>
					<a href="{{ url('/logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
						
						<i class="icon-off"></i>
						Logout
					</a>
				</li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>					
			</ul>
			<!-- / Top Fixed Bar: Breadcrumb Right Navigation -->

		</div>
		<!-- / Top Fixed Bar: Breadcrumb Container -->

	</div>
	<!-- / Top Fixed Bar: Breadcrumb -->

</div>
<!-- / Top Fixed Bar -->
@endsection