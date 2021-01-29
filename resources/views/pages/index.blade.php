
@extends('layouts/layout')

@section('content')
 <div class="hero-wrap " style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Soyez visibles en étant vous-même!</h1>
            <p><a href="{{ route('register') }}" class="btn btn-outline-warning py-3 px-4">S'INSCRIRE</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb"  style="margin-top:100px;">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
              <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/connect.jpg);">
              </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
              <div class="py-md-5">
                <div class="row justify-content-start pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                    <span class="subheading">NOUS VIVONS DANS UN MONDE</span>
                    <h2 class="mb-4"> CONNECTÉ À <span class="number text-primary" data-number="100">0</span> % </h2>
                     <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    <p class="lead">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

   


   <div class="container marketing" style="margin-top:8rem;">




    <!-- START THE FEATURETTES -->

   

    <div class="row featurette">
      <div class="col-md-7" style="margin-top: 8rem;">
       <div class="col-md-12 heading-section ftco-animate">
       <span class="subheading"> LA SOLUTION</span>
        <h2 class="mb-4"> MYDNEX<span class="text-primary">.</span> </h2>
        </div>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
     <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="" width="500" height="500" src="images/555.jpg" >
      </div>
    </div>

    

    <hr class="featurette-divider" style="margin-top: 8rem;">

    <!-- /END THE FEATURETTES -->

  </div>
 
   
    @endsection