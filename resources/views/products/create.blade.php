@extends('app')

@section('articles')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Описание изделия</div>
				<div class="panel-body">
				{!! Form::model($product =new \App\Product,['url'=>'products']) !!}
@include('products._form', ['submitButtonText'=>'Создать новое изделие'])
					{!! Form::close()!!}
				</div>

				@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection