@if (count($errors) > 0)
<div class="row">
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif

@if(Session::has('success'))
<div class="row">
    <div class="alert alert-success">
    	<p> {!! Session::get('success') !!} </p>
    </div>
</div>
@endif

@if(Session::has('fail'))
<div class="row">
    <div class="alert alert-danger">
    	<p> {!! Session::get('fail') !!} </p>
    </div>
</div>
@endif