<div class="col-md-4">
        <div class="panel panel-info">
                                     <div class="panel-heading">
                                         <i class="fa fa-archive fa-2x" class="panel-title">  Рубрика</i>
                                     </div>
             <div class="panel-body">

                 @foreach($tags as $tag)
                 <a href="{{action ('TagsController@show', [$tag->name])}}" class="btn btn-link ">{{$tag->name}}</a>
                 </br>
                 @endforeach

             </div>
        </div>
</div> <!--1 Block END-->