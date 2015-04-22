@extends('app')
@section('articles')
 <div class="panel panel-default">
	   <div class="panel-heading">Статьи</div>
					<div class="panel-body">
                    					@if (count($articles))
                    					<ul>
                    					@foreach($articles as $article)
                    					<h1>
                    					<a href="{{action ('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
                    					</h1>

                    					<li><?php
                                            					 $body = $article->body;
                                            					 $body = htmlspecialchars_decode($body);
                                            					 $body = Illuminate\Support\Str::words($body, 5);
                                            					 echo $body;
                                            					 ?></li>
                                            					 <hr>
                    					@endforeach
                    					</ul>
                    					@endif
			        </div>

 </div>

@endsection



