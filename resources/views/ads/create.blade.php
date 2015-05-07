@extends('app')

@section('articles')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cоздание объявления</div>
				<div class="panel-body">
				{!! Form::model($ad =new \App\Ad,['files'=>true,'url'=>'ads']) !!}
@include('ads._form', ['submitButtonText'=>'Создать новое объявление'])
					{!! Form::close()!!}
				</div>

				@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection




