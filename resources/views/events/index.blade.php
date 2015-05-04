@extends('app')
@section('articles')
{!! Breadcrumbs::render('events') !!}
 <div class="panel panel-default">
	   <div class="panel-heading"><h3>Новости сайта</h3></div>
					<div class="panel-body">
                    					@if (count($events))
                    					<ul>
                    					@foreach($events as $event)

                    					<!------------------------------------------------------------->
                    					 <div class="col-md-4"> <div class="panel panel-default">
                                         <div class="panel-heading">
                                             <a href="{{action ('EventsController@show', [$event->id])}}">{{$event->title}}</a>
                                         </div>
                                         <div class="panel-body">
                                         {!! Illuminate\Support\Str::words (html_entity_decode($event->body), 10) !!}
                                         <p>
                                           <a href="{{action ('EventsController@show', [$event->id])}}" class="btn btn-mini btn-default">Дальше...</a>
                                         </p>

                                         </div>
                                         </div>

                                         </div> <!--2 Block END-->
                    					<!------------------------------------------------------------->





                    					@endforeach
                    					</ul>
                    					@endif

			        </div>

 </div>

@endsection