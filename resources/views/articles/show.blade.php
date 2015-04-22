@extends('app')

@section('articles')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{{$article->title}}</h1></div>
				<div class="panel-body">

				<article>
				{!!html_entity_decode($article->body)!!}
				</article>
@unless($article->tags->isEmpty())
				<h5>Рубрики</h5>
				<ul>
				@foreach($article->tags as $tag)
				<li>{{$tag->name}}</li>
				@endforeach
                </ul>
@endunless

				</div>


			</div>
		</div>
	</div>
</div>
@endsection