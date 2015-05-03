@extends('app')

@section('articles')

			<div class="panel panel-default">
				<div class="panel-heading"><h1>{{$event->title}}</h1></div>
                            <div class="panel-body">
                                        <article>
                                        {!!html_entity_decode($event->body)!!}
                                        </article>
				            </div>
			</div>

@endsection