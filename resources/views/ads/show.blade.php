@extends('app')
@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('show_ad') !!}
</div>
</div>
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$ad->title}}</h3></div>
				<div class="panel-body">
				<div class="well well-sm">

				@unless($ad->image == Null)
                {!! HTML::image($ad->image, 'a picture', array('class' => 'thumb')) !!}
                <hr>
                @endunless
                                                        @unless($ad->price == Null)
                                                        <span class="label label-primary">
                                                        Цена: {!!html_entity_decode($ad->price)!!} грн.
                                                        </span>
                                                        <hr>
                                                        @endunless

				<article>
				{!!html_entity_decode($ad->body)!!}
				</article>
<hr>
<h3>Телефон:</h3>
				<article>
                {!!html_entity_decode($ad->phone)!!}
                </article>




@unless($ad->tagads->isEmpty())
				<h5>Объявление находится в рубрике:</h5>
				<ul>
				@foreach($ad->tagads as $tagad)
				<li>{{$tagad->name}}</li>
				@endforeach
                </ul>
@endunless

<nav>
  <ul class="pager">
    <li class="previous"><a href="{{action ('AdsController@index')}}"><span aria-hidden="true">&larr;</span> Назад</a></li>
  </ul>
</nav>
                                                @if (Auth::user())
                        @if (Auth::user()->email == env('ADMIN_AUTH_MAIL'))
                   </br>
                   <a href="{{action ('AdsController@edit', [$ad->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs">  Редактировать</i></a>
                   <hr>
                   {!! Form::model($ad, ['method'=>'DELETE', 'action'=>['AdsController@destroy', $ad->id]]) !!}
                                  	<button type="submit" >Удалить объявление</button>
                   {!! Form::close()!!}
       @else
    @if($ad->user_id == Auth::user()->id)
</br>
<a href="{{action ('AdsController@edit', [$ad->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs">  Редактировать</i></a>
<hr>
{!! Form::model($ad, ['method'=>'DELETE', 'action'=>['AdsController@destroy', $ad->id]]) !!}
                <button type="submit" >Удалить объявление</button>
{!! Form::close()!!}
     @endif
                       @endif
                                                     @endif




                </div>
				</div>
				</div>





@endsection