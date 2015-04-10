@extends('app')
@section('articles')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Моя статья</div>

				<div class="panel-body">
					<?php
					 $body = $article->body;
					 $body = htmlspecialchars_decode($body);
					 echo $body;
					 ?>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection