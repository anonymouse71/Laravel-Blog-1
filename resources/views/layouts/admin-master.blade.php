<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Area</title>
	<link rel ="stylesheet" href= "{{ url('src/css/bootstrap.min.css')}}">
	<link rel ="stylesheet" href= "{{ url('src/css/font-awesome.min.css')}}">
	<script src="{{ url('src/js/jquery-2.2.3.min.js')}}"></script>
	<script src="{{ url('src/js/bootstrap.min.js')}}"></script>
	@yield("styles")
</head>

<body>
	@include('includes.admin-header')
	<div class= "container-fluid">
		@yield('content')
	</div>
	@yield('scripts')
</body>

</html>
