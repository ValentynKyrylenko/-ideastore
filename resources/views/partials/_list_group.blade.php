<div id="accordion">
  <h3>Объявления</h3>
  <div>
    <p>
    Зарегестрированняе пользователи здесь могут прочитать объявления о продаже работ лучших мастеров хенд-мейд.
    </p>
    <p>
     <a href="{{action ('AdsController@index')}}" class="btn btn-mini btn-default">Просмотреть...</a>
    </p>
  </div>
  <h3>Категории</h3>
  <div>
    <p>
    Поиск объявлений по категориям:
    </p>
 <ul class="list-group">
                  @foreach($tagads as $tag)
                  <li class="list-group-item"><a href="{{action ('TagadsController@show', [$tag->name])}}" class="btn btn-link">{{$tag->name}}</a></li>
                  @endforeach
 </ul>
  </div>
  <h3>Разместить</h3>
  <div>
    <p>
    Здесь зарегестрированные пользователи могут самостоятельно разместить объявления о своих работах.
    </p>
    <p>
     <a href="{{action ('AdsController@create')}}" class="btn btn-mini btn-default">Создать...</a>
    </p>

  </div>
</div>

