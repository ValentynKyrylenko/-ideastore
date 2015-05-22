@extends('app')
@section('articles')
<div class="row">
<div class="col-md-12">
{!! Breadcrumbs::render('home') !!}
</div>
</div>

         <div class="row">
                    <div class="col-md-12">
                             @include('partials._homePageBlock')
                    </div>
         </div>

         <div class="row">
                 <div class="col-md-12">
                          <div class="col-md-4">
                                 @include('partials._list_group')
                          </div>

                          <div class="col-md-8">
                                 @include('partials._rightBlockHomePage')
                          </div>
                 </div>
         </div>


@endsection
