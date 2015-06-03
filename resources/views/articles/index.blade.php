@extends('app')
@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('articles') !!}
</div>
</div>


 @if (count($articles))
 <div class="row">
        <ul>
        @foreach($articles as $article)
                <div class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="box">
                            <div class="icon">
                                <div class="image"><i class="fa fa-comment"></i></div>
                                <div class="info">
                                    <h3 class="title"><a href="{{action ('ArticlesController@show', [$article->id])}}">{{$article->title}}</a></h3>
                                    <p>
                                        {!! Illuminate\Support\Str::words (html_entity_decode($article->body), 10) !!}
                                    </p>

                                    <div class="more">
                                        <a href="{{action ('ArticlesController@show', [$article->id])}}" title="Title Link">
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
 </div>
 <?php echo $articles->render(); ?>
 @endif

 @endsection



