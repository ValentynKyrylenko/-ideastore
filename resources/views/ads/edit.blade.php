@extends('app')

@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('edit_ad') !!}
</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cоздание статтьи</div>
				<div class="panel-body">
				{!! Form::model($ad, ['method'=>'PATCH','files'=>true, 'action'=>['AdsController@update', $ad->id]]) !!}
				@include('ads._form', ['submitButtonText'=>'Редактировать объявление'])
				{!! Form::close()!!}
				</div>

@include('errors.list')

			</div>
		</div>
	</div>
</div>
@endsection




