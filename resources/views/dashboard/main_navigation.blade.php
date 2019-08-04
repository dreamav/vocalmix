@extends('layouts.dashboard')

@section('main_navigation')
	<!-- Main Navigation: Box -->
	<div class="navbar navbar-inverse" id="nav">

		<!-- Main Navigation: Inner -->
		<div class="navbar-inner">

			<!-- Main Navigation: Nav -->
			<ul class="nav">

				<!-- Main Navigation: Dashboard -->
				<li class="active"><a href="{{url('/')}}"><i class="icon-align-justify"></i> Dashboard</a></li>
				<!-- / Main Navigation: Dashboard -->

				<!-- Main Navigation: General -->
				{{-- <li class="dropdown">
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
				<li><a href="gallery.html"><i class="icon-picture"></i> Gallery</a></li> --}}
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
@endsection