<div class="col-md-4">
        <div div class="panel panel-primary">
                                     <div class="panel-heading">
                                         <i class="fa fa-archive fa-lg" class="panel-title">  Направления творчества</i>
                                     </div>
             <div class="panel-body paragraph cl-effect-1">
<ul class="list-group">
                 @foreach($tags as $tag)
                 <li class="list-group-item"><a href="{{action ('TagsController@show', [$tag->name])}}" class="btn btn-link">{{$tag->name}}</a></li>
                 @endforeach
</ul>
             </div>
        </div>
</div> <!--1 Block END-->