@extends('layouts.html')
@section('main')  
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('../images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
              <h1 class="mb-3"></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url(' {{ $travel->image }}');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>{{ $travel->titre }}</h3>
              <p>{{ $travel->description }}</p>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

 


            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



@stop