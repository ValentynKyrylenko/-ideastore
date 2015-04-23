<nav class="navbar navbar-default bs-docs-nav" role="banner" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Магазин идей</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Дом</a></li>
					<li><a href="{{ url('/') }}">Работы</a></li>
					<li><a href="{{ url('/') }}">Идеи</a></li>
					<li><a href="{{ url('/') }}">Новости</a></li>
					<li><a href="{{ url('/') }}">Благотворительность</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
				        <li><a href="{{ url('#') }}">Обратная связь</a></li>
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Вход</a></li>
						<li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
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