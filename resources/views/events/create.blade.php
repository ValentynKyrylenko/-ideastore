@extends('app')

@section('articles')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cоздание новости</div>
				<div class="panel-body">
				{!! Form::model($event =new \App\Event,['url'=>'events']) !!}
@include('events._form', ['submitButtonText'=>'Создать новость на сайте'])
					{!! Form::close()!!}
				</div>

				@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection