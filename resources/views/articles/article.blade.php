@extends('app')
@section('articles')
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

@endsection