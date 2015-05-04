@extends('app')
@section('articles')
{!! Breadcrumbs::render('products') !!}
 <div class="panel panel-success">
	   <div class="panel-heading"><h3>Мои авторские работы</h3></div>
					<div class="panel-body">
                    					@if (count($products))
                    					<ul>
                    					@foreach($products as $product)

                    					<!------------------------------------------------------------->
                    					 <div class="col-md-4"> <div class="panel panel-warning">
                                         <div class="panel-heading">
                                             <a href="{{action ('ProductsController@show', [$product->id])}}">{{$product->title}}</a>
                                         </div>
                                         <div class="panel-body">
                                         {!! Illuminate\Support\Str::words (html_entity_decode($product->body), 10) !!}
                                         <p>
                                           <a href="{{action ('ProductsController@show', [$product->id])}}" class="btn btn-mini btn-default">Дальше...</a>
                                         </p>

                                         </div>
                                         </div>

                                         </div> <!--2 Block END-->
                    					<!------------------------------------------------------------->





                    					@endforeach
                    					</ul>
                    					@endif

			        </div>

 </div>

@endsection