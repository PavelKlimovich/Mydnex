<?php 
$nav = "active";
?>
@extends('layouts/layout')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/125.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">LES REBELLES</h2>
            
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section">
    	<div class="container">
        <div class="row">
			@foreach ($profils as $profil)
        	<div class="col-md-4">
        		<div class="causes causes-2 text-center pb-4 px-md-4">
        			<div class="img" style="background-image: url(@if (empty($profil->image)){{url("/images/default.jpg)")}} @else {{url("$profil->image")}} @endif);"></div>
        			<h2 ><a href="{{ url('rebelle') }}/{{$profil->slug}}"  target="_blank">{{ $profil->firstname }} {{ $profil->name }} | {{ $profil->job}}</a></h2>
        			<p>{{$profil->about}}</p>
        		</div>
        	</div>
			
        	@endforeach
			
        </div>
        {{ $profils->links() }}
    	</div>
    </section>
    
@endsection