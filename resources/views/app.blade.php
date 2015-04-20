<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>

	<![endif]-->
	<!--SELECT 2-->
</head>
<body>

	@include('partials._navigation')

	<div class="container">
	@if (Session::has('flash_message'))
	<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{{Session::get('flash_message')}}</div>
	@endif
	</div>




	@yield('articles')

	@yield('footer')

	<!-- Scripts -->

    <script type="text/javascript" src="{{ URL::asset('/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/ckeditor/adapters/jquery.js') }}"></script>

</body>
</html>
