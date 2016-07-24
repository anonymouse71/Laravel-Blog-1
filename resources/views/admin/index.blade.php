@extends('layouts.admin-master')

@section('content')
<div class="container">
@include('includes.info-box')
	<div class="row">
		<div class="col-md-6">
			<div class="thumbnail">
				<p>
					<a href="{{ route('admin.blog.create_post') }}" class="btn btn-primary" role="button">New Post</a></li>
					<a href="#" class="btn btn-primary" role="button">Show All</a></li>
				</p>
				@if(count($posts) === 0)
					<p>No post here</p>
				@endif
				@foreach($posts as $post)
					<div class="well">
						<h3>{{$post->title}}</h3>
						<p>{{$post->author}} | {{$post->created_at}}</p>
						<p>					
							<a href="#" class="btn btn-primary btn-xs" role="button">View Post</a>
							<a href="#" class="btn btn-primary btn-xs" role="button">Edit</a>
							<a href="#" class="btn btn-danger btn-xs" role="button">Delete</a>
						</p>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
				<p><a href="#" class="btn btn-primary" role="button">Show All Messages</a></p>
				<div class="well">
					<h3>Message Subject</h3>
					<p>Sender | Date</p>
					<p>					
						<a href="#" class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#myModal">View</a>
						<a href="#" class="btn btn-danger btn-xs" role="button">Delete</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Message Subject</h4>
		    </div>
		    <div class="modal-body">
		        <p>Message body</p>
		    </div>
	    </div>
	  </div>
	</div>
</div>
@endsection
