@extends('app')
@section('articles')
{!! Breadcrumbs::render('products') !!}
        @if (count($products))
        <ul>
        @foreach($products as $product)
                <div class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="box">
                            <div class="icon">
                                <div class="image"><i class="fa fa-briefcase"></i></div>
                                <div class="info">
                                    <h3 class="title"><a href="{{action ('ProductsController@show', [$product->id])}}">{{$product->title}}</a></h3>
                                    <p>
                                        {!! Illuminate\Support\Str::words (html_entity_decode($product->body), 10) !!}
                                    </p>

                                    <div class="more">
                                        <a href="{{action ('ProductsController@show', [$product->id])}}" title="Title Link">
                                            Читать дальше... <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                        </div>
                </div>
        @endforeach
                    					</ul>
        @endif
 @endsection