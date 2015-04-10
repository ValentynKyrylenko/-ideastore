@extends('app')

@section('articles')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cоздание статтьи</div>
				<div class="panel-body">
				{!! Form::open(['url'=>'articles']) !!}
@include('articles._form', ['submitButtonText'=>'Создать статью'])
					{!! Form::close()!!}
				</div>

				@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection




