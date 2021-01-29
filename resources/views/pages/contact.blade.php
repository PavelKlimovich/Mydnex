<?php 
$nav = "active";
?>
@extends('layouts/layout')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/124.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">BALANCE TON MAIL</h2>
          </div>
        </div>
      </div>
    </section>
		
		
			
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container marketing"style="  margin-bottom: 8rem;  margin-top: 8rem;">
    <div class="container">
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-md-12 heading-section ftco-animate">
                    <h2>NOUS CONTACTER </h2>
                </div>
                <hr class="featurette-divider">
        <div class="row">
      <div class="container-fluid px-0">
        <div class="row no-gutters block-9">
          <div class="col-md-12 order-md-last d-flex">
 
            <form action="{{ route('sendmessagetomydnex') }}" method='POST' class="bg-light p-5 contact-form">
            @csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Qui vous étes ?" name='name'>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre adresse email" name='email'>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Objet du Message" name='objet'>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Votre Message" ></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

           </div>
      </div>
        </div>
      </div>
      </div>
    </section>
@endsection