<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Объявления
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
         <p>
         Зарегестрированняе пользователи могут прочитать объявления о продаже работ лучших мастеров хенд-мейд.
         </p>
         <p>
         Также, после регистрации, вы сможете совершенно бесплатно размещать свои объявления, которые смогут увидеть все пользователи нашего ресурса!
         </p>
         <p>
         <a href="{{action ('AdsController@index')}}" class="btn btn-mini btn-default">Просмотреть...</a>
         </p>
      </div>
    </div>
  </div>

  @if(Auth::user())
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Категории
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
         <p>
            Поиск объявлений по категориям:
         </p>
         <ul class="list-group">
                          @foreach($tagads as $tag)
                          <li class="list-group-item"><a href="{{action ('TagadsController@show', [$tag->name])}}" class="btn btn-link">{{$tag->name}}</a></li>
                          @endforeach
         </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Разместить объявление
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       <p>
                Зарегестрированняе пользователи могут прочитать объявления о продаже работ лучших мастеров хенд-мейд.
                </p>
                <p>
                Также, после регистрации, вы сможете совершенно бесплатно размещать свои объявления, которые смогут увидеть все пользователи нашего ресурса!
                </p>
                <p>
                <a href="{{action ('AdsController@index')}}" class="btn btn-mini btn-default">Просмотреть...</a>
                </p>
      </div>
    </div>
  </div>
  @endif
</div>

