<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ручные изделия">
    <meta name="author" content="Valentyn Kyrylenko">
    <title>Магазин идей</title>
	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/footer-distributed-with-address-and-phones.css') }}" rel="stylesheet"><!--FOOTER STYLE-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"><!--FOOTER STYLE-->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"><!--FOOTER STYLE-->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<![endif]-->
	<!--SELECT 2-->

	<style>
	body {
        margin-top: 35px;
    }
	</style>
</head>


<body>
           <header>
                   @include('partials._navigation')
           </header>

            <div id ='body' class="container"> <!--Body site main contents-->
                       @if (Session::has('flash_message'))
                       <div class="alert alert-success">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{Session::get('flash_message')}}
                       </div>
                       @endif

                       <div class="row">
                                   <div class="col-md-12">
                                      @yield('articles') <!--Contents-->
                                   </div>
                       </div>

                       <div class="row">
                                   <div class="col-md-4"> <div class="panel panel-info">
                                                                 <div class="panel-heading">
                                                                     <h3 class="panel-title">100 Continue</h3>
                                                                 </div>
                                                                 <div class="panel-body">The client should continue with its request.</div>
                                                             </div></div> <!--1 Block END-->

                                   <div class="col-md-4"> <div class="panel panel-info">
                                                                 <div class="panel-heading">
                                                                     <h3 class="panel-title">100 Continue</h3>
                                                                 </div>
                                                                 <div class="panel-body">The client should continue with its request.</div>
                                                             </div></div> <!--2 Block END-->

                                   <div class="col-md-4"> <div class="panel panel-info">
                                                                 <div class="panel-heading">
                                                                     <h3 class="panel-title">100 Continue</h3>
                                                                 </div>
                                                                 <div class="panel-body">The client should continue with its request.</div>
                                                             </div></div> <!--3 Block END-->
                       </div>
            </div> <!--Body site main contents-->


            <footer><!--Footer contents-->
@include('partials._footer')
            </footer><!--Footer contents-->
            @include('partials._jsLinks')
</body>
</html>
