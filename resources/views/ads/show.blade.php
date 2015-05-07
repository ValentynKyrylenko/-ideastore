@extends('app')
@section('articles')
{!! Breadcrumbs::render('show_article') !!}
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$ad->title}}</h3></div>
				<div class="panel-body">
				<div class="well well-sm">
				<article>
				{!!html_entity_decode($ad->body)!!}
				</article>


@unless($ad->image == Null)
{!! HTML::image($ad->image, 'a picture', array('class' => 'thumb')) !!}
@endunless

@unless($ad->tagads->isEmpty())
				<h5>Объявление находится в рубрике:</h5>
				<ul>
				@foreach($ad->tagads as $tagad)
				<li>{{$tagad->name}}</li>
				@endforeach
                </ul>
@endunless

<nav>
  <ul class="pager">
    <li class="previous"><a href="{{action ('AdsController@index')}}"><span aria-hidden="true">&larr;</span> Назад</a></li>
  </ul>
</nav>
@if (Auth::user())
@if (Auth::user()->email == env('ADMIN_AUTH_MAIL'))
                  </br>
                  <a href="{{action ('AdsController@edit', [$ad->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs"></i></a>
                  <a href="{{action ('AdsController@edit', [$ad->id])}}" class="btn btn-mini btn-default"> <i class="fa fa-trash-o"></i></a>
@endif
@endif

                </div>
				</div>
				</div>

@endsection