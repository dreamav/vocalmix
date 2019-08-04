@extends('layouts.dashboard')

@section('alert')

	<!-- Alert -->
	@if(!isset($message))
	<div class="alert alert-light">
		<a class="close" data-dismiss="alert">&times;</a>
		<i class="icon-comment"></i> Welcome back, <b>{{ Auth::user()->name }}</b>. We have missed you!
	</div>
	@else
	<div class="alert alert-light">
		<a class="close" data-dismiss="alert">&times;</a>
		<i class="icon-comment"></i> {{$message}}
	</div>
	@endif
	<!-- / Alert -->
@endsection