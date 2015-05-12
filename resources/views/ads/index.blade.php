@extends('app')

@section('articles')
{!! Breadcrumbs::render('articles') !!}

@if (count($user_ads))

<button class="btn btn-primary" style="display: block; width: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Ваши размещённые объявления (нажмите для продолжения)
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
    <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Изображение</th>
                                                            <th>Название</th>
                                                            <th>Описание</th>
                                                            <th>Местонахождение</th>
                                                            <th>Цена/грн.</th>
                                                            <th>Дата</th>
                                                            <th>Редактировать/Удалить</th>
                                                        </tr>
                                                    </thead>

                                                    <tfoot>
                                                        <tr>
                                                            <th>Изображение</th>
                                                            <th>Название</th>
                                                            <th>Описание</th>
                                                            <th>Местонахождение</th>
                                                            <th>Цена/грн.</th>
                                                            <th>Дата</th>
                                                            <th>Редактировать/Удалить</th>
                                                        </tr>
                                                    </tfoot>

                                                    <tbody>
                                                    @foreach($user_ads as $ad)
                                                        <tr>
                                                            <td>{!! HTML::image($ad->image, 'a picture', array('class' => 'thumb')) !!}</td>
                                                            <td>{{$ad->title}}</td>
                                                            <td>{!! Illuminate\Support\Str::words (html_entity_decode($ad->body), 20) !!}</td>
                                                            <td>{{$ad->location}}</td>
                                                            <td>{{$ad->price}}</td>
                                                            <td>{{Carbon::parse($ad->published_at)->format('d/m/Y')}}</td>
                                                            <td><a href="{{action ('AdsController@show', [$ad->id])}}">Действие...</a></td>
                                                        </tr>
                                                     @endforeach
                                                    </tbody>
                                                </table>
  </div>
</div>
@endif

<!--------------------------------------------------------Объявления мастеров----------------------------------------------------------->
 <div class="panel panel-success">
	   <div class="panel-heading"><h3>Объявления лучших мастеров</h3>
	   <!--------------------------------------------------------------------------->
	   <!-- Button trigger modal -->
       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
         Разместить объявление
       </button>

       <!-- Modal -->
    <div id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Confirmation</h4>
                          </div>
                          <div class="modal-body">
                              <p class="text-warning">На нашем сайте Вы абсолютно бесплатно можете разместить свои работы хенд-мейд!</p>
                              <p class="text-warning">Спасибо, что остаётесь с нами!</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Спасибо, я подумаю...</button>
                              <a href="{{action ('AdsController@create')}}" class="btn btn-primary" role="button">Разместить работу...</a>
                          </div>
                      </div>
                  </div>
              </div>

              <span class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                  Категории... <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  @foreach($tagads as $tag)
                  <li><a href="{{action ('TagadsController@show', [$tag->name])}}">{{$tag->name}}</a></li>
                  @endforeach

                </ul>
              </span>

	   <!--------------------------------------------------------------------------->
	   </div>
					<div class="panel-body">
                    					@if (count($ads))
                    					<!------------------------------------------------------------------------------->
                    					<table id="example" class="display" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Изображение</th>
                                                        <th>Название</th>
                                                        <th>Описание</th>
                                                        <th>Местонахождение</th>
                                                        <th>Цена/грн.</th>
                                                        <th>Дата</th>
                                                        <th>Просмотр</th>
                                                    </tr>
                                                </thead>

                                                <tfoot>
                                                    <tr>
                                                        <th>Изображение</th>
                                                        <th>Название</th>
                                                        <th>Описание</th>
                                                        <th>Местонахождение</th>
                                                        <th>Цена/грн.</th>
                                                        <th>Дата</th>
                                                        <th>Просмотр</th>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                @foreach($ads as $ad)
                                                    <tr>
                                                        <td>{!! HTML::image($ad->image, 'a picture', array('class' => 'thumb')) !!}</td>
                                                        <td>{{$ad->title}}</td>
                                                        <td>{!! Illuminate\Support\Str::words (html_entity_decode($ad->body), 20) !!}</td>
                                                        <td>{{$ad->location}}</td>
                                                        <td>{{$ad->price}}</td>
                                                        <td>{{Carbon::parse($ad->published_at)->format('d/m/Y')}}</td>
                                                        <td><a href="{{action ('AdsController@show', [$ad->id])}}">Просмотреть...</a></td>
                                                    </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
                    					<!------------------------------------------------------------------------------->
                    					@endif

			        </div>

 </div>

@endsection



