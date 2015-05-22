<div class="col-md-4">
 <div div class="panel panel-primary">
 <div class="panel-heading">
     <i class="fa fa-paint-brush fa-lg" class="panel-title">  Последние авторские работы</i>
 </div>
<div class="panel-body paragraph cl-effect-1">
<ul class="list-group">
  @foreach($latest_products as $product)
   <li class="list-group-item"><a href="{{action ('ProductsController@show', [$product->id])}}" class="btn btn-link">{{$product->title}}</a></li>
  @endforeach
</ul>
 </div>
</div>
</div> <!--2 Block END-->