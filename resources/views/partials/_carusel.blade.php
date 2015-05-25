 <div class="carousel fade" data-ride="carousel" id ="featured">
  <!-- Indicators -->
              <ol class="carousel-indicators">

              </ol>

  <!-- Wrapper for slides -->
         <div class="carousel-inner fullheight">
            <div class="item">
              <img src={{ URL::asset('media/banner/1600.jpg') }} alt="Main">
            </div>

            <div class="item">
              <img src={{ URL::asset('media/banner/1600.jpg') }} alt="Second">
            </div>

            <div class="item">
              <img src={{ URL::asset('media/banner/1600.jpg') }} alt="Third">
            </div>
         </div>

  <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
 </div>

