<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ручные изделия">
    <meta name="author" content="Valentyn Kyrylenko">
    <title>Магазин идей</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset(elixir("css/all.css")) }}">
    <link rel="stylesheet" href="{{ asset("css/box.css") }}">
    <link rel="stylesheet" href="{{ asset("css/my_css.css") }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"><!--FOOTER STYLE-->

    {{--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css"/>--}}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<![endif]-->
	<!--SELECT 2-->
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>



</head>


 <body>
           <header>
                   @include('partials._carusel')
                   @include('partials._navigation')
           </header>

            <div id ='body' class="container"> <!--Body site main contents-->
                       @if (Session::has('message'))
                       <div class="alert alert-info">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{Session::get('message')}}
                       </div>
                       @endif


                       <div id="main_content" class="row"><!--Основная информация сайта-->
                                   <div class="col-md-12">
                                      @yield('articles')
                                   </div>
                       </div>
            </div>

             <div class="container-fluid">
                       <div class="row">
                                   <div class="col-md-12">
                                      @include('side_content.products')
                                      @include('side_content.tags')
                                      @include('side_content.recent')
                                   </div>
                       </div>
             </div>





            <footer><!--Footer contents-->
                @include('partials._footer')
            </footer><!--Footer contents-->
            @include('partials._jsLinks')


</body>
</html>
