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
	<link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet"> <!--LIGHTBOX STYLE-->
	<link href="{{ asset('/css/component_links.css') }}" rel="stylesheet"> <!--LINKS-->


	<link href="{{ asset('/css/footer-distributed-with-address-and-phones.css') }}" rel="stylesheet"><!--FOOTER STYLE-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"><!--FOOTER STYLE-->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"><!--FOOTER STYLE-->

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css"/>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<![endif]-->
	<!--SELECT 2-->
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

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
.slick-slide {
    text-align: center;
}

.slick-slide::before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.slick-slide img {
    vertical-align: middle;
    display: inline-block;
    width: 100%;
}

@media (max-width: @screen-xs) {
    body{font-size: 10px;}
}

@media (max-width: @screen-sm) {
    body{font-size: 14px;}
}


h5{
    font-size: 1.4em;
}

.ideastore {
font-weight: 100;
font-size: 28px;
font-family: 'Lato';
}




		.middle_headline {font-family: times, Times New Roman, times-roman, georgia, serif;
		font-size: 28px;
		line-height: 40px;
		letter-spacing: -1px;color: #444;
		}



        .paragraph{font-family: times, Times New Roman, times-roman, georgia, serif;
		font-size: 14px;
		line-height: 20px;
		text-transform: uppercase;
		color: #444;}



         .large_headline{     font-family: times, Times New Roman, times-roman, georgia, serif;
		font-size: 48px;
	        line-height: 40px;
	        letter-spacing: -1px;
		color: #444;
		margin: 0 0 0 0;
		padding: 0 0 0 0;
                font-weight: 100;}

a:link {color: #CA6924; text-decoration: none; }
a:active {color: #8DB255; text-decoration: underline; }
a:visited {color: #95A5A6; text-decoration: underline; }
a:hover {color: #757D75; text-decoration: none; }
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
                                     @include('side_content.slick') <!--Slick Carousel-->
                                  </div>
                      </div>


                       <div id="banner_area" class="row">
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
