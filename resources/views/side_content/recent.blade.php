<div class="col-md-4"> <div class="panel panel-info">
 <div class="panel-heading">
     <i class="fa fa-bell fa-2x" class="panel-title">  Последние публикации</i>
 </div>
 <div class="panel-body">

  @foreach($latest_articles as $article)
  <a href="{{action ('ArticlesController@show', [$article->id])}}" class="btn btn-link">{{$article->title}}</a>
  </br>
  @endforeach

 </div>
</div></div> <!--2 Block END-->