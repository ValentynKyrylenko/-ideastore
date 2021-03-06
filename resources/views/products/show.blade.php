@extends('app')
@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('show_product') !!}
</div>
</div>
<div class="panel panel-info">
				<div class="panel-heading"><h3>{{$product->title}}</h3></div>
                            <div class="panel-body">
                                        <article>
                                        <div class="well well-sm">
                                        {!!html_entity_decode($product->body)!!}
                                        </br>
                                        				{{--<div--}}
                                                          {{--class="fb-like"--}}
                                                          {{--data-send="true"--}}
                                                          {{--data-width="450"--}}
                                                          {{--data-show-faces="true">--}}
                                                        {{--</div>--}}
                                                         <div class="addthis_sharing_toolbox"></div>
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
                                                                    <hr>
                                                                    {!! Form::model($product, ['method'=>'DELETE', 'action'=>['ProductsController@destroy', $product->id]]) !!}
                                                                                    <button type="submit" >Удалить работу</button>
                                                                    {!! Form::close()!!}

                                                @endif
                                                @endif

				            </div>
			</div>

@endsection