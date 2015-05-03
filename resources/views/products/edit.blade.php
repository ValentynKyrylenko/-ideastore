@extends('app')

@section('articles')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Редактирование описания авторской работы</div>
				<div class="panel-body">
				{!! Form::model($product, ['method'=>'PATCH', 'action'=>['ProductsController@update', $product->id]]) !!}
				@include('products._form', ['submitButtonText'=>'Изментить описание авторской работы'])
					{!! Form::close()!!}
				</div>

@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection




