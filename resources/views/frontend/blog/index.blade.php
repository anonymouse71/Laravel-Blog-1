@extends('layouts.master')

@section('title', 'Blog Index')

@section('content')
	@foreach($posts as $post)
	<article>
		<h3>{{$post->title}}</h3>
		<p><b>{{$post->author}} | {{$post->created_at}}</b></p>
		<p>{{$post->body}}</p>
		<p><a href="#">Read More</a></p>
	</article>
	@endforeach
	{!! $posts->render() !!}
@endsection