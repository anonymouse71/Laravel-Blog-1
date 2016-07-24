@extends('layouts.admin-master')

@section('content')
<div class="container">
@include('includes.info-box')
	<form method="POST" action="" id="contact-form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" value="{{ Request::old('email') }}">
		</div>
	    <div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password">
		</div>
	    <div class="form-group">
	        <button type="submit" class="btn btn-primary">Login</button>
	    </div>
	</form>
</div>
@endsection