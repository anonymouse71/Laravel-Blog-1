@extends('layouts.admin-master')

@section('content')
<div class="container">
@include('includes.info-box')
	<form method="POST" action="" id="contact-form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" name="title" id="title" value="{{ Request::old('title') }}">
		</div>
	    <div class="form-group">
			<label for="author">Author</label>
			<input type="text" class="form-control" name="author" id="author" value="{{ Request::old('author') }}">
		</div>
	    <div class="form-group">
	    	<label for="category_select">Category</label>
			<select class="form-control" name="category_select" id="category_select">
				<option value="">Dummy</option>
			</select>
			<button type="button" class="btn btn-primary btn-sm">Add Category</button>
			<div class="added-categories">
				<ul><li></li></ul>
			</div>
			<input type="hidden" class="form-control" name="categories" id="categories">
		</div> 
	    <div class="form-group">
	        <label for="body">Body</label>
	        <textarea name="body" class="form-control" rows="10" id="body" value="{{ Request::old('body') }}"></textarea>
	    </div> 
	    <div class="form-group">
	        <button type="submit" class="btn btn-primary">Create Post</button>
	    </div>
	</form>

</div>
@endsection