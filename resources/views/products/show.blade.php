@extends('app')
@section('articles')
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$product->title}}</h3></div>
                            <div class="panel-body">
                                        <article>
                                        <div class="well well-sm">
                                        {!!html_entity_decode($product->body)!!}
                                         </div>
                                        <span class="label label-primary">
                                        Цена: {!!html_entity_decode($product->price)!!} грн.
                                        </span>
                                        </article>
                                                                        <nav>
                                                                          <ul class="pager">
                                                                            <li class="previous"><a href="{{action ('ProductsController@index')}}"><span aria-hidden="true">&larr;</span> Назад</a></li>
                                                                          </ul>
                                                                        </nav>

                                                @if (Auth::user())
                                                @if (Auth::user()->email == env('ADMIN_AUTH_MAIL'))
                                                                    </br>
                                                                    <a href="{{action ('ProductsController@edit', [$product->id])}}" class="btn btn-mini btn-default"><i class="fa fa-cogs"></i></a>
                                                                    <a href="{{action ('ProductsController@edit', [$product->id])}}" class="btn btn-mini btn-default"> <i class="fa fa-trash-o"></i></a>

                                                @endif
                                                @endif

				            </div>
			</div>

@endsection