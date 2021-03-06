@extends('app')
@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('show_event') !!}
</div>
</div>
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$event->title}}</h3></div>
                            <div class="panel-body">
                            <div class="well well-sm">
                                        <article>
                                        {!!html_entity_decode($event->body)!!}
                                        </br>
                                        				{{--<div--}}
                                                          {{--class="fb-like"--}}
                                                          {{--data-send="true"--}}
                                                          {{--data-width="450"--}}
                                                          {{--data-show-faces="true">--}}
                                                        {{--</div>--}}
                                                         <div class="addthis_sharing_toolbox"></div>
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
                                                                  <hr>
                                                                {!! Form::model($event, ['method'=>'DELETE', 'action'=>['EventsController@destroy', $event->id]]) !!}
                                                                      <button type="submit" >Удалить новость</button>
                                                                {!! Form::close()!!}
                                              @endif
                                              @endif
                            </div>
				            </div>
			</div>

@endsection