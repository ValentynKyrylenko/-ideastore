@extends('app')
@section('articles')
{!! Breadcrumbs::render('articles') !!}
 <div class="panel panel-success">
	   <div class="panel-heading"><h3>Статьи</h3></div>
					<div class="panel-body">
                    					@if (count($ads))
                    					<ul>
                    					@foreach($ads as $ad)

                    					<!------------------------------------------------------------->
                    					 <div class="col-md-4"> <div class="panel panel-warning">
                                         <div class="panel-heading">
                                             <a href="{{action ('AdsController@show', [$ad->id])}}">{{$ad->title}}</a>
                                         </div>
                                         <div class="panel-body">
                                         {!! Illuminate\Support\Str::words (html_entity_decode($ad->body), 10) !!}
                                         <p>
                                           <a href="{{action ('AdsController@show', [$ad->id])}}" class="btn btn-mini btn-default">Дальше...</a>
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



