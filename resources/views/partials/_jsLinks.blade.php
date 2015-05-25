


       <script src="{{ asset(elixir("js/all.js")) }}"></script>
       <script type="text/javascript" src="{{ URL::asset('/ckeditor/ckeditor.js') }}"></script>
       <script type="text/javascript" src="{{ URL::asset('/ckeditor/adapters/jquery.js') }}"></script>
       <!------------------------------------------------------------------------------------------------->
       <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script>
                   $(function(){
                   "use strict";
                   var topoffset = 50; //menu height
                   var slideqty = $('#featured .item').length;
                   var wheight = $(window).height();//get the height of the window
                   var randSlide = Math.floor(Math.random()*slideqty);


                   $('#featured .item').eq(randSlide).addClass('active');

                   $('.fullheight').css('height', wheight);//set to window tallness

                   //replvace IMG inside carusel with a background image
                   $('#featured .item img').each(function(){
                   var imgSrc = $(this).attr('src');
                   $(this).parent().css({'background-image': 'url('+imgSrc+')'});
                   $(this).remove();
                   });

                   //adjust height of .fullheight elements on window resize
                   $(window).resize(function(){
                   wheight = $(window).height()//get the height of the window
                   $('.fullheight').css('height', wheight);
                   });

//                   //Activate Scrollpy
//                   $('body').scrollspy({
//                   target:'header .navbar',
//                   offset: topoffset
//                   });
//
                   //Add inbody class
                   var hash =$(this).find('li .active a').attr('href');
                   if(hash !=='#featured') {
                   $('header nav').addClass('inbody');
                   } else {
                   $('header nav').removeClass('inbody');
                   }
                    //Add an inbody class to nav when scrollspy event fires
                    //
                    //
                    //

                    //Automatically generate corousel indicators
                    for (var i=0; i<slideqty; i++) {
                    var insertText = '<li data-target="#featured" data-slide-to="'+ i + '"';
                    if (i === randSlide){
                    insertText += 'class="active" ';
                    }
                    insertText += '></li>';
                    $('#featured ol').append(insertText);
                    }

                    $('.carousel').carousel({
                    pause: false
                    });


                   });//document
                   </script>








