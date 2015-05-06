@extends('app')
@section('articles')
{!! Breadcrumbs::render('home') !!}
                           <div class="row">
                             <div class="col-md-8 col-md-offset-2">
                                {!! HTML::image('http://localhost/laravel_1/public/media/background_images/ideastore-vdohnovlyaet.jpg', 'a picture', array('class' => 'home_page_bg_image static hidden-sm hidden-xs')) !!}
                             </div>
                           </div>
@endsection
