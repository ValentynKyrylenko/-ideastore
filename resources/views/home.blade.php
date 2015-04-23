@extends('app')
@section('articles')
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

			<div class="panel panel-default">
				<div class="panel-heading middle_headline">Домашняя страница</div>

				<div class="panel-body">
					<div class="middle_headline">ideastore.com.ua</div>
					<p class="paragraph">Приветствуем Вас на нашем сайте! It is very nice</p>
                    <div class="ideastore">{{ Inspiring::quote() }}</div>
				</div>
			</div>

@endsection
