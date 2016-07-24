<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel ="stylesheet" href= "{{ url('src/css/bootstrap.min.css')}}">
	<link rel ="stylesheet" href= "{{ url('src/css/font-awesome.min.css')}}">
	<script src="{{ url('src/js/jquery-2.2.3.min.js')}}"></script>
	<script src="{{ url('src/js/bootstrap.min.js')}}"></script>
	@yield("styles")
</head>

<body>
	@include('includes.header')
	<div class= "container-fluid">
		@yield('content')
	</div>
	@include('includes.footer')
</body>

</html>
