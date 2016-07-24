@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<article>
	<h1>Contact</h3>
@include('includes.info-box')	
	<form method="POST" action="{{route('contact.send')}}" id="contact-form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">Your name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
	    <div class="form-group">
			<label for="email">Your E-mail</label>
			<input type="email" class="form-control" name="email" id="email">
		</div> 
		<div class="form-group">
			<label for="subject">Your Subject</label>
			<input type="text" class="form-control" name="subject" id="subject">
		</div>
	    <div class="form-group">
	        <label for="message">Message</label>
	        <textarea name="message" class="form-control" rows="10" id="message"></textarea>
	    </div> 
	    <div class="form-group">
	        <button type="submit" class="btn btn-primary">Submit Message</button>
	    </div>
	</form>
</article>
	
@endsection

