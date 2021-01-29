<?php 
$nav = "active";

?>
@extends('layouts/layout')

@section('content')
@foreach ($article as $articles )
<section class="hero-wrap hero-wrap-2" style="background-image: url({{url("$articles->image")}});" data-stellar-background-ratio="0.5">
      <div class="overlay">
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h4 class="mb-3 bread1">{{$articles->title}}</h4>
          </div>
        </div>
      </div>
    </section>
		
        
        
	<section class="ftco-section">
      <div class="container">
        <div class="row  ">
        
          <div class="col-lg-12 order-md ftco-animate">
            <h2 class="mb-3">{{$articles->title}}</h2>
             <div><p>Publié le{{ date(" j M Y, à H\hi", strtotime($articles->updated_at))}}</p></div>
            <hr>
            <?php  echo $articles->content ?>
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="" alt="" class="img-fluid mb-4">
              </div>
              <div class="desc">
              <p>Publié Par </p>
                <h3>{{$articles->author}}</h3>
                
              </div>
              
            </div>
@endforeach

            

               
            
 
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> 
    
    
@endsection