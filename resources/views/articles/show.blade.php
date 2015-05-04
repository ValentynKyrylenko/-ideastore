@extends('app')
@section('articles')
{!! Breadcrumbs::render('show_article') !!}
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$article->title}}</h3></div>
				<div class="panel-body">
				<div class="well well-sm">
				<article>
				{!!html_entity_decode($article->body)!!}
				</article>
@unless($article->tags->isEmpty())
				<h5>Статья находится в рубрике:</h5>
				<ul>
				@foreach($article->tags as $tag)
				<li>{{$tag->name}}</li>
				@endforeach
                </ul>
@endunless

<nav>
  <ul class="pager">
    <li class="previous"><a href="{{action ('EventsController@index')}}"><span aria-hidden="true">&larr;</span> Назад</a></li>
  </ul>
</nav>
@if (Auth::user())
@if (Auth::user()->email == env('ADMIN_AUTH_MAIL'))
                  </br>
                  <a href="{{action ('EventsController@edit', [$article->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs"></i></a>
                  <a href="{{action ('EventsController@edit', [$article->id])}}" class="btn btn-mini btn-default"> <i class="fa fa-trash-o"></i></a>
@endif
@endif

                </div>
				</div>
				</div>

@endsection