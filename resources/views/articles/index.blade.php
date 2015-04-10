@extends('app')

@section('articles')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Статьи</div>

				<div class="panel-body">
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
                                            					 echo $body;
                                            					 ?></li>
                    					@endforeach
                    					</ul>
                    					@endif
                    				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection




@section('footer')
<div class="navbar navbar-default navbar-fixed-bottom" id="footer">
<div class="container">
   <p class="navbar-text">!!!!<p>
    </div><!-- end container -->
</div> <!-- end footer -->

@endsection