<div class="col-md-4">
<div div class="panel panel-primary">
 <div class="panel-heading">
     <i class="fa fa-bell fa-lg" class="panel-title">  Последние мастер-классы</i>
 </div>
 <div class="panel-body paragraph cl-effect-1">
<ul class="list-group">
  @foreach($latest_articles as $article)
   <li class="list-group-item"><a href="{{action ('ArticlesController@show', [$article->id])}}" class="btn btn-link">{{$article->title}}</a></li>
  @endforeach
</ul>
 </div>
</div>
</div> <!--2 Block END-->