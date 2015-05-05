					@if (Auth::user())
					@if (Auth::user()->email == env('ADMIN_AUTH_MAIL'))
                        <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-pencil fa-lg"> Админ</i> <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/products/create') }}">Авторские работы</a></li>
                                    <li><a href="{{ url('/articles/create') }}">Мастер клссы</a></li>
                                    <li><a href="{{ url('/events/create') }}">Новости</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/auth/logout') }}">Выход ...</a></li>
                                  </ul>
                                </li>
                    @endif
                    @endif