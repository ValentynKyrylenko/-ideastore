@extends('app')
@section('articles')
 <h1>Загрузка медиа контента</h1>

    <form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="file" name="filefield">
        <hr>
        <input type="submit" class="btn btn-info">
    </form>
<hr>
<h1>Ваш медиаконтент</h1>
<p>http://localhost/laravel_1/public/media/admin_media/</p>
 <div class="row">
        <ul class="thumbnails">
 @foreach($entries as $entry)
            <div class="col-md-2">
                {{--<div class="thumbnail">--}}
                    <img src="{{route('getentry', $entry->filename)}}" alt="ALT NAME" class="img-responsive" />
                    <div class="caption">
                        <p style="font-size: 60%">{{$entry->filename}}</p>
                    </div>
                    <a href="{{action ('ImageController@delete', [$entry->filename])}}" class="label label-danger">Удалить</a>
                {{--</div>--}}
            </div>
 @endforeach
 </ul>
 </div>
 
@endsection