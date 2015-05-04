@extends('app')

@section('articles')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Редактирование новости сайта</div>
				<div class="panel-body">
				{!! Form::model($event, ['method'=>'PATCH', 'action'=>['EventsController@update', $event->id]]) !!}
				@include('events._form', ['submitButtonText'=>'Редактировать новость сайта'])
					{!! Form::close()!!}
				</div>

@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection




