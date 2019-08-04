@extends('layouts.dashboard')

@section('module_settings')
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
@endsection