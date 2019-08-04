@extends('layouts.dashboard')

@section('module_messages')
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
@endsection