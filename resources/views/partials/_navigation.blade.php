<nav class="navbar navbar-default navbar-fixed-top" role="banner" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand ideastore" href="#"> ideastore</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}"><i class="fa fa-anchor fa-lg"> Дом</i></a></li>
					<li><a href="{{ url('/products') }}"><i class="fa fa-briefcase fa-lg"> Авторские работы</i></a></li>
					<li><a href="{{ url('/articles') }}"><i class="fa fa-comment fa-lg"> Мастер-классы</i></a></li>
					<li><a href="{{ url('/events') }}"><i class="fa fa-bullhorn fa-lg"> Новости</i></a></li>
					<li><a href="{{ url('/charity') }}"><i class="fa fa-child fa-lg"> Благотворительность</i></a></li>

					<!-------------------------------------ADMIN----------------------------------------------------->
                                              @include('partials._adminMenu')
					<!-------------------------------------ADMIN----------------------------------------------------->

				</ul>

				<ul class="nav navbar-nav navbar-right">

					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}"><i class="fa fa-unlock fa-lg"> Вход</i></a></li>
						<li><a href="{{ url('/auth/register') }}"><i class="fa fa-tag fa-lg"> Регистрация</i></a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Выход</a></li>
							</ul>
						</li>
					@endif

				</ul>
			</div>
		</div>
	</nav>