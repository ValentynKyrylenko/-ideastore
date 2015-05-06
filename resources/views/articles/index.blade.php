@extends('app')
@section('articles')
<div class="btn-group btn-breadcrumb">
{!! Breadcrumbs::render('articles') !!}
</div>
 <div class="panel panel-success">
	   <div class="panel-heading"><h3>Статьи</h3></div>
					<div class="panel-body">
                    					@if (count($articles))
                    					<ul>
                    					@foreach($articles as $article)

                    					<!------------------------------------------------------------->
                    					 <div class="col-md-4"> <div class="panel panel-warning">
                                         <div class="panel-heading">
                                             <a href="{{action ('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
                                         </div>
                                         <div class="panel-body">
                                         {!! Illuminate\Support\Str::words (html_entity_decode($article->body), 10) !!}
                                         <p>
                                           <a href="{{action ('ArticlesController@show', [$article->id])}}" class="btn btn-mini btn-default">Дальше...</a>
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



