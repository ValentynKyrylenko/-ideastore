@extends('app')
@section('articles')
{!! Breadcrumbs::render('articles') !!}
 <div class="panel panel-success">
	   <div class="panel-heading"><h3>Объявления лучших мастеров</h3></div>
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



