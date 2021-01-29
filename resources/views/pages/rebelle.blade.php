@extends('layouts.rebelle')
@foreach ($profils as $profil)
@php
$email= $profil->email;
session_start();

@endphp

@section('content')

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb " style='margin-top: 100px;'>
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img d-flex align-self-stretch align-items-center"
                    style="background-image:url(@if (empty($profil->image)){{url("/images/default.jpg)")}} @else {{url("$profil->image")}} @endif);">
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h3 class="mb-4">Rebelle à <span class="number text-primary" data-number="100">0</span> %
                            </h3>
                            <h2>{{ $profil->firstname }} {{ $profil->name }}</h2>
                            <h3 class="text-primary">{{ $profil->job }} <span class="text-body">| {{ $profil->city }}
                                </span></h3>
                            <br>
                            <h5><span class="iconspan icon-envelope"></span> {{ $profil->email }} </h5>

                            <br>
                            <hr>

                            <p>{{$profil->about}} </p>
                            <p>{{$profil->presentation}}</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($skills->isEmpty())
    
    @else
   
<div class="container" style='margin-top: 50px;'>
    <div class="row d-flex">
        <div class="row featurette">
            <div class="col-md-12">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Mes Compétences <span class="text-primary">... </span></h2>
                </div>
                <hr class="featurette-divider">
                <br>
                <ul class="list-group list-group-horizontal-md">
                @foreach ($skills as $skill )
  <li class="list-group-item">{{ $skill->skill }}</li>
  @endforeach
</ul>
            </div>
        </div>
    </div>

</div>


    



    
    @endif


    
@if ($experiences->isEmpty())
    
    @else
    
    <div class="container" style='margin-top: 100px;'>
        <div class="row d-flex" id="closeExp">
            <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="invExp">    
                <div class="w-100" >
                    <div class="col-md-12 heading-section ftco-animate"  >
                        <h2>Experiences</h2>

                        
                    </div>
                    <hr>
                    <br>


          
@foreach ($experiences as $experience )
     <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="resume-content">
                            <h3 class="mb-0 text-primary">{{ $experience->title }}</h3>

                            <h5 class=" text-body">{{ $experience->starData}} -> @if($experience->endData== null) AUJOURD'HUI @else{{ $experience->endData }} @endif </h5>
                            <div class="subheading mb-3">{{ $experience->society }} <span class="text-body"> | {{ucwords($experience->city,",") }} </span>
                            </div>
                            <p>B{{ $experience->text }}</p>
                        </div>
                    </div>
    
    @endforeach
          <hr>
                </div>
          </section>
        </div>
    </div>
   

    
    @endif




@if ($educations->isEmpty())
    

    @else
    <div class="container" style='margin-top: 100px;'>
    <div class="row d-flex">
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Formations</h2>
     
                </div>
                <hr >
                <br>
    @foreach ($educations as $education )
    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0 text-primary">{{ $education->degree }}</h3>

                        <h5 class=" text-body">@if($education->endData== null)En cours @else En {{ $education->endData }}  @endif </h5>
                        <div class="subheading mb-3">{{ $education->school }} <span class="text-body">  </span>
                        </div>
                        <p>{{ $education->text }}</p>
                    </div>
                </div>
  
    @endforeach
          <hr>
            </div>
          </section>
    </div>
</div>
    @endif
   

    








    





<div class="container" style='margin-top: 100px;'>
        
<div class="col-md-12 heading-section ftco-animate">
                        <h2> Me Contacter</h2>
                    </div>
                    <hr>

   

        
        
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="margin-bottom: 100px;">
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
            <div class="row">
                <div class="container-fluid px-0">
                    <div class="row no-gutters block-9">
                        <div class="col-md-12 order-md-last d-flex">

                            <form action="{{ route('sendmessage') }}" method='POST' class="bg-light p-5 contact-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre Nom" name='name'>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre adresse email"
                                        name='email'>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Objet" name='objet'>
                                </div>
                                <div class="form-group">
                                    <textarea name="message"  cols="30" rows="7" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>

                                <input id="profil_email" name="profil_email" type="hidden" value="{{ $profil->email }}">
                                <div class="form-group">
                                    <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        
          
    </section>
</div> 

    @endforeach

    @endsection
