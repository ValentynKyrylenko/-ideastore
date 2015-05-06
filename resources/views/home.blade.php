@extends('app')
@section('articles')

{!! Breadcrumbs::render('home') !!}


              <div class="container">
                     <div class="row">
                          <div class="col-md-3">
                                     @include('partials._list_group')
                          </div>

                             <div class="col-md-9">
                                     {!! HTML::image('http://localhost/laravel_1/public/media/background_images/ideastore-vdohnovlyaet.jpg', 'a picture', array('class' => 'home_page_bg_image')) !!}
                             </div>
                     </div>
              </div>

@endsection
