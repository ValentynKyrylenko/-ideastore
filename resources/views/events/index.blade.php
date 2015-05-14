@extends('app')
@section('articles')
{!! Breadcrumbs::render('events') !!}
 @if (count($events))
      <ul>
         @foreach($events as $event)
                 <div class="col-xs-12 col-sm-6 col-lg-4">
                                        <div class="box">
                                            <div class="icon">
                                                <div class="image"><i class="fa fa-bullhorn"></i></div>
                                                <div class="info">
                                                    <h3 class="title"><a href="{{action ('EventsController@show', [$event->id])}}">{{$event->title}}</a></h3>
                                                    <p>
                                                        {!! Illuminate\Support\Str::words (html_entity_decode($event->body), 10) !!}
                                                    </p>

                                                    <div class="more">
                                                        <a href="{{action ('EventsController@show', [$event->id])}}" title="Title Link">
                                                            Читать дальше... <i class="fa fa-angle-double-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space"></div>
                                        </div>
                                </div>
         @endforeach
      </ul>
 @endif
     @endsection