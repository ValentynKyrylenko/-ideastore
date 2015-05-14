@extends('app')
@section('articles')

{!! Breadcrumbs::render('home') !!}


     <div class="container">
         <div class="row">
                    <div class="col-md-12">
                                   @include('partials._side_menu')
                    </div>
         </div>

         <div class="row">
                 <div class="col-md-12">
                          <div class="col-md-4">
                                     @include('partials._list_group')
                          </div>

                          <div class="col-md-8">
                                     {!! HTML::image('http://localhost/laravel_1/public/media/background_images/ideastore-vdohnovlyaet.jpg', 'a picture', array('class' => 'home_page_bg_image')) !!}
                          </div>
                 </div>
         </div>
     </div>

@endsection
