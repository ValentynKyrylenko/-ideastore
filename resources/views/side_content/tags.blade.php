<div class="col-md-4">
        <div class="panel panel-info">
                                     <div class="panel-heading">
                                         <h3 class="panel-title">Рубрики</h3>
                                     </div>
             <div class="panel-body">

                 @foreach($tags as $tag)
                 <a href="{{action ('TagsController@show', [$tag->name])}}" class="btn btn-link ">{{$tag->name}}</a>
                 </br>
                 @endforeach

             </div>
        </div>
</div> <!--1 Block END-->