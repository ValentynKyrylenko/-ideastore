@extends('app')
@section('articles')
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$event->title}}</h3></div>
                            <div class="panel-body">
                            <div class="well well-sm">
                                        <article>
                                        {!!html_entity_decode($event->body)!!}
                                        </article>
                                              <nav>
                                                  <ul class="pager">
                                                    <li class="previous"><a href="{{action ('EventsController@index')}}"><span aria-hidden="true">&larr;</span> Назад</a></li>
                                                  </ul>
                                              </nav>

                                              @if (Auth::user())
                                              @if (Auth::user()->email == env('ADMIN_AUTH_MAIL'))
                                                                  </br>
                                                                  <a href="{{action ('EventsController@edit', [$event->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs"></i></a>
                                                                  <a href="{{action ('EventsController@edit', [$event->id])}}" class="btn btn-mini btn-default"> <i class="fa fa-trash-o"></i></a>
                                              @endif
                                              @endif
                            </div>
				            </div>
			</div>

@endsection