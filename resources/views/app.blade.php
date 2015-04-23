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
        background-image: url('http://localhost/laravel_1/public/media/background_images/paisley.png');
    }
    hr {
        color: #bdc3c7; /*для IE */
        background-color:#bdc3c7; /*для Firefox, Opera, Safari*/
        border:0px none;
        height:1px; /* высота 1px IE, Firefox, Opera, Safari */
        clear:both; /* для очистки, если тег идет после float елемента */
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
                          @include('side_content.tags')
                          @include('side_content.recent')
                          @include('side_content.links')
                       </div>
            </div> <!--Body site main contents-->


            <footer><!--Footer contents-->
@include('partials._footer')
            </footer><!--Footer contents-->
            @include('partials._jsLinks')
</body>
</html>
