@extends('layouts.dashboard')

@section('alert')
	<!-- Alert -->
	<div class="alert alert-light">
		<a class="close" data-dismiss="alert">&times;</a>
		<i class="icon-comment"></i> Welcome back, <b>{{ Auth::user()->name }}</b>. We have missed you!
	</div>
	<!-- / Alert -->
@endsection