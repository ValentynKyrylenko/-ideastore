@extends('app')

@section('articles')

			<div class="panel panel-default">
				<div class="panel-heading"><h1>{{$product->title}}</h1></div>
                            <div class="panel-body">
                                        <article>
                                        {!!html_entity_decode($product->body)!!}
                                        <hr>
                                        <p>Цена: {!!html_entity_decode($product->price)!!} грн.</p>
                                        </article>
				            </div>
			</div>

@endsection