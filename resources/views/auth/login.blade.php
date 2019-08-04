@extends('layouts.admin')

@section('content')
<div class="container">  

		<form class="form-signin form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
		{{ csrf_field() }}
		<div class="top-bar">
			<h3><i class="icon-music"></i> VocalMix<b>Panel</b></h3>
		</div>
		<div class="well no-padding">

			<div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label class="control-label" for="inputName"><i class="icon-user"></i></label>
				<div class="controls">
					<input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label class="control-label" for="inputUsername"><i class="icon-key"></i></label>
				<div class="controls">
					<input type="password" id="password" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif					
				</div>
			</div>

		<div class="padding">
			<button class="btn btn-primary" type="submit">Sign in</button>
			<a class="btn" type="submit" href="{{ url('/password/reset') }}">Forgot Password</a>
			</div>
		</div>
	</form>

</div>
@endsection