{{--<div id="accordion">--}}
  {{--<h5>Объявления</h5>--}}
  {{--<div>--}}
    {{--<p>--}}
    {{--Зарегестрированняе пользователи могут прочитать объявления о продаже работ лучших мастеров хенд-мейд.--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--Также, после регистрации, вы сможете совершенно бесплатно размещать свои объявления, которые смогут увидеть все пользователи нашего ресурса!--}}
    {{--</p>--}}
    {{--<p>--}}
     {{--<a href="{{action ('AdsController@index')}}" class="btn btn-mini btn-default">Просмотреть...</a>--}}
    {{--</p>--}}
  {{--</div>--}}
                                   {{--@if(Auth::user())--}}
  {{--<h3>Категории</h3>--}}
  {{--<div>--}}
    {{--<p>--}}
    {{--Поиск объявлений по категориям:--}}
    {{--</p>--}}
 {{--<ul class="list-group">--}}
                  {{--@foreach($tagads as $tag)--}}
                  {{--<li class="list-group-item"><a href="{{action ('TagadsController@show', [$tag->name])}}" class="btn btn-link">{{$tag->name}}</a></li>--}}
                  {{--@endforeach--}}
 {{--</ul>--}}
  {{--</div>--}}
  {{--<h3>Разместить</h3>--}}
  {{--<div>--}}
    {{--<p>--}}
    {{--Здесь зарегестрированные пользователи могут самостоятельно разместить объявления о своих работах.--}}
    {{--</p>--}}
    {{--<p>--}}
     {{--<a href="{{action ('AdsController@create')}}" class="btn btn-mini btn-default">Создать...</a>--}}
    {{--</p>--}}

  {{--</div>--}}
  {{--@endif--}}
{{--</div>--}}

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

