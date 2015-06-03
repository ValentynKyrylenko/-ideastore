@extends('app')
@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('show_article') !!}
</div>
</div>
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$article->title}}</h3></div>
				<div class="panel-body">
				<div class="well well-sm">
				<article>
				{!!html_entity_decode($article->body)!!}
				</br>
				<div
                  class="fb-like"
                  data-send="true"
                  data-width="450"
                  data-show-faces="true">
                </div>
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
                  <a href="{{action ('ArticlesController@edit', [$article->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs"></i></a>
                  <hr>
                  {!! Form::model($article, ['method'=>'DELETE', 'action'=>['ArticlesController@destroy', $article->id]]) !!}
                        <button type="submit" >Удалить статью</button>
                  {!! Form::close()!!}
@endif
@endif

                </div>
				</div>
				</div>

@endsection