<?php 
$navProfil = "active";
session_start();

?>
@extends('layouts.app')



@section('content')



<!-- ERRORS AND SUCCESS  -->
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



<!-- Profil Empty  -->


@if ($profil->isEmpty())






<!-- Profil not Empty  -->
@else
@foreach ($profil as $profilinfo )
<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb ">
    <div class="container">
    <div class="formblock" id="BlockUpdateProfil" style="display: none;">
                <div id="close"><button onclick="closeProfilUpdate()" class="close-btn">X</button></div>
                <form action="{{ route('updateProfil') }}" method='POST' enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" id="title" name="name" required
                            placeholder="Entrer votre Nom" value="{{$profilinfo->name }}">
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" id="author" name="firstname" required
                            placeholder="Entrer votre le Prénom " value="{{$profilinfo->firstname }}">
                    </div>
                    <select id="exp-area" name="category" required="" data-original-title="" title="">
                        <option value="" default="" disabled="" selected>Secteur d'activité </option>
                        <option selected value="{{$profilinfo->category }}">
                           {{$profilinfo->category }}
                        </option>
                        <option value="AVIATION_AEROSPACE">
                            Aéronautique &amp; aérospatiale
                        </option>
                        <option value="IT">
                            Agence &amp; SSII
                        </option>
                        <option value="FOOD">
                            Agroalimentaire
                        </option>
                        <option value="ARCHITECTURE">
                            Architecture &amp; urbanisme
                        </option>
                        <option value="CRAFTS">
                            Arts &amp; artisanat
                        </option>
                        <option value="CIVIC_SOCIAL">
                            Associatif et syndical
                        </option>
                        <option value="AUTOMOBILE">
                            Automobile
                        </option>
                        <option value="BANKING_INSURANCE">
                            Banque &amp; assurances
                        </option>
                        <option value="BIOTECH">
                            Biotechnologies
                        </option>
                        <option value="CIVIL_ENGINEERING">
                            BTP &amp; construction
                        </option>
                        <option value="RESEARCH">
                            Centres de recherche
                        </option>
                        <option value="CHEMICAL">
                            Chimie
                        </option>
                        <option value="FILM">
                            Cinéma &amp; audiovisuel
                        </option>
                        <option value="SMALL_RETAIL">
                            Commerce de détail
                        </option>
                        <option value="CONSULTING">
                            Conseil &amp; audit
                        </option>
                        <option value="CULTURE">
                            Culture
                        </option>
                        <option value="MILITARY">
                            Défense &amp; armée
                        </option>
                        <option value="LEISURE">
                            Divertissements &amp; loisirs
                        </option>
                        <option value="E_COMMERCE">
                            E-commerce
                        </option>
                        <option value="PUBLISHING">
                            Edition
                        </option>
                        <option value="EDUCATION">
                            Education &amp; e-learning
                        </option>
                        <option value="SOFTWARE">
                            Edition de logiciels
                        </option>
                        <option value="ENERGY">
                            Energie
                        </option>
                        <option value="ENVIRONMENT">
                            Environnement
                        </option>
                        <option value="RETAIL">
                            Grande distribution
                        </option>
                        <option value="HIGH_TECH">
                            High tech
                        </option>
                        <option value="HOSPITALITY">
                            Hôtellerie
                        </option>
                        <option value="REAL_ESTATE">
                            Immobilier
                        </option>
                        <option value="IMPORT_EXPORT">
                            Import &amp; export
                        </option>
                        <option value="MECHANICAL">
                            Ingénierie mécanique
                        </option>
                        <option value="PRIMARY">
                            Industrie matières premières
                        </option>
                        <option value="PHARMA">
                            Industrie pharmaceutique
                        </option>
                        <option value="GAMES">
                            Jeux vidéo &amp; animation
                        </option>
                        <option value="LUXURY">
                            Luxe
                        </option>
                        <option value="COSMETICS">
                            Mode &amp; cosmétiques
                        </option>
                        <option value="NANOTECH">
                            Nanotechnologies
                        </option>
                        <option value="IOT">
                            Internet des objets
                        </option>
                        <option value="PRESS">
                            Presse &amp; médias
                        </option>
                        <option value="SOCIAL">
                            Réseaux sociaux
                        </option>
                        <option value="HR">
                            Ressources humaines
                        </option>
                        <option value="RESTAURANTS">
                            Restauration
                        </option>
                        <option value="HEALTH">
                            Santé &amp; bien-être
                        </option>
                        <option value="MEDICAL">
                            Secteur médical
                        </option>
                        <option value="PUBLIC">
                            Secteur public &amp; collectivités
                        </option>
                        <option value="SAFETY">
                            Sécurité civile
                        </option>
                        <option value="SPORTS">
                            Sport
                        </option>
                        <option value="TELECOM">
                            Télécommunications
                        </option>
                        <option value="TRANSPORT">
                            Transports
                        </option>
                        <option value="LOGISTIC">
                            Logistique &amp; Supply Chain
                        </option>
                        <option value="TRAVEL">
                            Voyage &amp; tourisme
                        </option>
                        <option value="WINE">
                            Vins &amp; Spiritueux
                        </option>
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Photo de profil</label>
                        <input  type="file" class="form-control-file" id="image" name='image'>
                    </div>
                    <div class="form-group">
                        <label>Votre métier</label>
                        <input required type="text" class="form-control" id="texte" name="job"
                            placeholder="Votre déscription du post" value="{{$profilinfo->job}}">
                    </div>
                    <div class="form-group">
                        <label>Votre ville</label>
                        <input required type="text" class="form-control" id="source" name="city"
                            placeholder="La ville où vous chercher un post!" value="{{$profilinfo->job }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required type="text" class="form-control" id="link" name="email"
                            placeholder="Entrer votre adresse email" value="{{$profilinfo->email }}">
                    </div>
                    <div class="form-group">
                        <label>Présentez-vous de manière chaleureuse en quelques lignes et n'hésitez pas à lister les
                            types de projets sur lesquels vous pouvez intervenir, les méthodologies que vous utilisez,
                            les compétences techniques maitrisées ou encore les livrables que vous pouvez
                            fournir.</label>
                        <textarea required class="form-control"  name="about" id="exampleFormControlTextarea1"
                            rows="3">{{$profilinfo->about}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Ce que vous recherchez!</label>
                        <textarea required class="form-control"  name="presentation" id="exampleFormControlTextarea1"
                            rows="3">{{$profilinfo->presentation }}</textarea>
                    </div>
                    <button type="submit" id="valider" class="btn btn-primary btn-lg">Envoyer</button>
                </form>
            </div>
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex"  >

            
                <div id="imageProfil" class="img d-flex align-self-stretch align-items-center" 
                    style="background-image:url(@if (empty($profilinfo->image)){{url("/images/default.jpg)")}} @else {{url("$profilinfo->image")}} @endif);">
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                    
                        <div class="col-md-12 heading-section ftco-animate" id='BlockProfil'>
                        
                            <h2>{{ $profilinfo->firstname }} {{ $profilinfo->name }}</h2>
                            <h3 class="text-primary">{{ $profilinfo->job }} <span class="text-body">|
                                    {{ $profilinfo->city }} </span></h3>
                            <br>
                            <h5><span class="iconspan icon-envelope"></span> {{ $profilinfo->email }} </h5>
                            <br>
                            <button type="button" onclick="OpenProfilUpdate()" id="" class="btn btn-primary btn-lg">Modifier</button>
                            <hr>
                            <p>{{$profilinfo->about}} </p>
                            <p>{{$profilinfo->presentation}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endif


<!-- SKILLS   -->

<div class="container" style='margin-top: 50px;'>
    <div class="row d-flex">
        <div class="row featurette">
            <div class="col-md-12">
                <div class="formblock" id="formSkills" style="display: none;">
                    <div id="xskills"><button class="close-btn">X</button></div>
                    <form action="{{route('sendSkill')}}" method='POST'>
                        @csrf
                        <div class="form-group">
                            <label>Compétence</label>
                            <input type="text" class="form-control" id="skill" name="skill" required
                                placeholder="Votre competétence">
                        </div>
                        <button type="submit" id="sendSkill" class="btn btn-primary btn-lg">Rajouter</button>
                    </form>
                </div>
                <div class="col-md-12 heading-section ftco-animate" id="closeSkills">
                    <h2>Mes Compétences <span class="text-primary">... </span></h2>
                    <button type="button" id="AddSkills" class="btn btn-primary btn-lg">Rajouter</button>
                </div>
                <hr class="featurette-divider">
                <br>
                <ul class="list-group list-group-horizontal-md">

                    <!-- SKILLS Empty  -->
                  @if ($skills->isEmpty())  
                    <li class="list-group-item skills">Pas Encore De Competence </li>
                    
                </ul>
                @else
                
                <!-- SKILLS Not Empty  -->
                @foreach ($skills as $skill )
                <li class="list-group-item skills">{{ $skill->skill }} <form action="{{ route('deleteSkill') }}" method='POST' enctype="multipart/form-data">
                    @csrf
                    <input id="id" name="skill" type="hidden" value="{{$skill->skill}}">
                    <button type="submit" title="Supprimer"
                        class="btn btn-primary btn-sm">x</button></li>
                        </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

 
 <!-- EXPERIENCE  Empty  -->

@if ($experiences->isEmpty())
<div class="container" style='margin-top: 100px;'>
    <div class="row d-flex" id="closeExp">
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="invExp">
            <div class="w-100">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Experiences</h2>
                    <div class="formblock" id="formExp" style="display: none;">
                        <div id="CloseExp"><button class="close-btn">X</button></div>
                        <form action="{{route('sendExperience')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label>Société </label>
                                <input type="text" class="form-control" id="skill" name="society" required
                                    placeholder="Nom de votre client ou employeur">
                            </div>
                            <select id="exp-area" name="category" required="" data-original-title="" title="">
                                <option value="" default="" disabled="" selected="">Secteur d'activité </option>
                                <option value="AVIATION_AEROSPACE">
                                    Aéronautique &amp; aérospatiale
                                </option>
                                <option value="IT">
                                    Agence &amp; SSII
                                </option>
                                <option value="FOOD">
                                    Agroalimentaire
                                </option>
                                <option value="ARCHITECTURE">
                                    Architecture &amp; urbanisme
                                </option>
                                <option value="CRAFTS">
                                    Arts &amp; artisanat
                                </option>
                                <option value="CIVIC_SOCIAL">
                                    Associatif et syndical
                                </option>
                                <option value="AUTOMOBILE">
                                    Automobile
                                </option>
                                <option value="BANKING_INSURANCE">
                                    Banque &amp; assurances
                                </option>
                                <option value="BIOTECH">
                                    Biotechnologies
                                </option>
                                <option value="CIVIL_ENGINEERING">
                                    BTP &amp; construction
                                </option>
                                <option value="RESEARCH">
                                    Centres de recherche
                                </option>
                                <option value="CHEMICAL">
                                    Chimie
                                </option>
                                <option value="FILM">
                                    Cinéma &amp; audiovisuel
                                </option>
                                <option value="SMALL_RETAIL">
                                    Commerce de détail
                                </option>
                                <option value="CONSULTING">
                                    Conseil &amp; audit
                                </option>
                                <option value="CULTURE">
                                    Culture
                                </option>
                                <option value="MILITARY">
                                    Défense &amp; armée
                                </option>
                                <option value="LEISURE">
                                    Divertissements &amp; loisirs
                                </option>
                                <option value="E_COMMERCE">
                                    E-commerce
                                </option>
                                <option value="PUBLISHING">
                                    Edition
                                </option>
                                <option value="EDUCATION">
                                    Education &amp; e-learning
                                </option>
                                <option value="SOFTWARE">
                                    Edition de logiciels
                                </option>
                                <option value="ENERGY">
                                    Energie
                                </option>
                                <option value="ENVIRONMENT">
                                    Environnement
                                </option>
                                <option value="RETAIL">
                                    Grande distribution
                                </option>
                                <option value="HIGH_TECH">
                                    High tech
                                </option>
                                <option value="HOSPITALITY">
                                    Hôtellerie
                                </option>
                                <option value="REAL_ESTATE">
                                    Immobilier
                                </option>
                                <option value="IMPORT_EXPORT">
                                    Import &amp; export
                                </option>
                                <option value="MECHANICAL">
                                    Ingénierie mécanique
                                </option>
                                <option value="PRIMARY">
                                    Industrie matières premières
                                </option>
                                <option value="PHARMA">
                                    Industrie pharmaceutique
                                </option>
                                <option value="GAMES">
                                    Jeux vidéo &amp; animation
                                </option>
                                <option value="LUXURY">
                                    Luxe
                                </option>
                                <option value="COSMETICS">
                                    Mode &amp; cosmétiques
                                </option>
                                <option value="NANOTECH">
                                    Nanotechnologies
                                </option>
                                <option value="IOT">
                                    Internet des objets
                                </option>
                                <option value="PRESS">
                                    Presse &amp; médias
                                </option>
                                <option value="SOCIAL">
                                    Réseaux sociaux
                                </option>
                                <option value="HR">
                                    Ressources humaines
                                </option>
                                <option value="RESTAURANTS">
                                    Restauration
                                </option>
                                <option value="HEALTH">
                                    Santé &amp; bien-être
                                </option>
                                <option value="MEDICAL">
                                    Secteur médical
                                </option>
                                <option value="PUBLIC">
                                    Secteur public &amp; collectivités
                                </option>
                                <option value="SAFETY">
                                    Sécurité civile
                                </option>
                                <option value="SPORTS">
                                    Sport
                                </option>
                                <option value="TELECOM">
                                    Télécommunications
                                </option>
                                <option value="TRANSPORT">
                                    Transports
                                </option>
                                <option value="LOGISTIC">
                                    Logistique &amp; Supply Chain
                                </option>
                                <option value="TRAVEL">
                                    Voyage &amp; tourisme
                                </option>
                                <option value="WINE">
                                    Vins &amp; Spiritueux
                                </option>
                            </select>
                            <div class="form-group">
                                <label>Titre </label>
                                <input type="text" class="form-control" id="skill" name="title" required
                                    placeholder="Rôle ou type de réalisation">
                            </div>
                            <div class="form-group">
                                <label>Lieu </label>
                                <input type="text" class="form-control" id="skill" name="city" required
                                    placeholder="Paris,France">
                            </div>
                            <div class="row">
                                <label>Période/</label>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Du</label>
                                        <div class="input-append date dateinput" id="dp1" data-date=""
                                            data-date-format="Y/m/d">
                                            <div><input required class="span2" size="16" type="text" value=""
                                                    name="starData">
                                                <span class="add-on"><i class="icon-calendar"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Au</label>
                                        <div class="input-append date dateinput" id="dp2" data-date=""
                                            data-date-format="Y/m/d">
                                            <input class="span2" size="16" type="text" value="" name="endData">
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" style="margin: 25px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="dp3"  value="today">
                                            <label class="form-check-label" for="gridCheck">
                                                Toujour en cours
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required class="form-control" name="text" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Rajouter</button>
                        </form>
                    </div>
                    <button type="button" id="AddExp" class="btn btn-primary btn-lg">Rajouter</button>
                </div>
                <hr>
                <br>

               <!-- EXPERIENCE  Exemple  -->

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0 text-primary">Senior Web Developer</h3>

                        <h5 class=" text-body">March 2013 - Present </h5>
                        <div class="subheading mb-3">Intelitec Solutions <span class="text-body">| Paris </span>
                        </div>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                            of
                            the day, going forward, a new normal that has evolved from generation X is on the runway
                            heading towards a streamlined cloud solution. User generated content in real-time will
                            have
                            multiple touchpoints for offshoring.</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                      </div>
                  </div>
                </section>
              @else

 <!-- EXPERIENCE  not empty  -->
<div class="container" style='margin-top: 100px;'>
    <div class="row d-flex" id="closeExp">
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="invExp">
            <div class="w-100">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Experiences</h2>

                    <div class="formblock" id="formExp" style="display: none;">
                        <div id="CloseExp"><button class="close-btn">X</button></div>
                        <form action="{{route('sendExperience')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label>Société </label>
                                <input type="text" class="form-control" id="skill" name="society" required
                                    placeholder="Nom de votre client ou employeur">
                            </div>

                            <select id="exp-area" name="category" required="" data-original-title="" title="">
                                <option value="" default="" disabled="" selected="">Secteur d'activité </option>
                                <option value="AVIATION_AEROSPACE">
                                    Aéronautique &amp; aérospatiale
                                </option>
                                <option value="IT">
                                    Agence &amp; SSII
                                </option>
                                <option value="FOOD">
                                    Agroalimentaire
                                </option>
                                <option value="ARCHITECTURE">
                                    Architecture &amp; urbanisme
                                </option>
                                <option value="CRAFTS">
                                    Arts &amp; artisanat
                                </option>
                                <option value="CIVIC_SOCIAL">
                                    Associatif et syndical
                                </option>
                                <option value="AUTOMOBILE">
                                    Automobile
                                </option>
                                <option value="BANKING_INSURANCE">
                                    Banque &amp; assurances
                                </option>
                                <option value="BIOTECH">
                                    Biotechnologies
                                </option>
                                <option value="CIVIL_ENGINEERING">
                                    BTP &amp; construction
                                </option>
                                <option value="RESEARCH">
                                    Centres de recherche
                                </option>
                                <option value="CHEMICAL">
                                    Chimie
                                </option>
                                <option value="FILM">
                                    Cinéma &amp; audiovisuel
                                </option>
                                <option value="SMALL_RETAIL">
                                    Commerce de détail
                                </option>
                                <option value="CONSULTING">
                                    Conseil &amp; audit
                                </option>
                                <option value="CULTURE">
                                    Culture
                                </option>
                                <option value="MILITARY">
                                    Défense &amp; armée
                                </option>
                                <option value="LEISURE">
                                    Divertissements &amp; loisirs
                                </option>
                                <option value="E_COMMERCE">
                                    E-commerce
                                </option>
                                <option value="PUBLISHING">
                                    Edition
                                </option>
                                <option value="EDUCATION">
                                    Education &amp; e-learning
                                </option>
                                <option value="SOFTWARE">
                                    Edition de logiciels
                                </option>
                                <option value="ENERGY">
                                    Energie
                                </option>
                                <option value="ENVIRONMENT">
                                    Environnement
                                </option>
                                <option value="RETAIL">
                                    Grande distribution
                                </option>
                                <option value="HIGH_TECH">
                                    High tech
                                </option>
                                <option value="HOSPITALITY">
                                    Hôtellerie
                                </option>
                                <option value="REAL_ESTATE">
                                    Immobilier
                                </option>
                                <option value="IMPORT_EXPORT">
                                    Import &amp; export
                                </option>
                                <option value="MECHANICAL">
                                    Ingénierie mécanique
                                </option>
                                <option value="PRIMARY">
                                    Industrie matières premières
                                </option>
                                <option value="PHARMA">
                                    Industrie pharmaceutique
                                </option>
                                <option value="GAMES">
                                    Jeux vidéo &amp; animation
                                </option>
                                <option value="LUXURY">
                                    Luxe
                                </option>
                                <option value="COSMETICS">
                                    Mode &amp; cosmétiques
                                </option>
                                <option value="NANOTECH">
                                    Nanotechnologies
                                </option>
                                <option value="IOT">
                                    Internet des objets
                                </option>
                                <option value="PRESS">
                                    Presse &amp; médias
                                </option>
                                <option value="SOCIAL">
                                    Réseaux sociaux
                                </option>
                                <option value="HR">
                                    Ressources humaines
                                </option>
                                <option value="RESTAURANTS">
                                    Restauration
                                </option>
                                <option value="HEALTH">
                                    Santé &amp; bien-être
                                </option>
                                <option value="MEDICAL">
                                    Secteur médical
                                </option>
                                <option value="PUBLIC">
                                    Secteur public &amp; collectivités
                                </option>
                                <option value="SAFETY">
                                    Sécurité civile
                                </option>
                                <option value="SPORTS">
                                    Sport
                                </option>
                                <option value="TELECOM">
                                    Télécommunications
                                </option>
                                <option value="TRANSPORT">
                                    Transports
                                </option>
                                <option value="LOGISTIC">
                                    Logistique &amp; Supply Chain
                                </option>
                                <option value="TRAVEL">
                                    Voyage &amp; tourisme
                                </option>
                                <option value="WINE">
                                    Vins &amp; Spiritueux
                                </option>
                            </select>
                            <div class="form-group">
                                <label>Titre </label>
                                <input type="text" class="form-control" id="skill" name="title" required
                                    placeholder="Rôle ou type de réalisation">
                            </div>
                            <div class="form-group">
                                <label>Lieu </label>
                                <input type="text" class="form-control" id="skill" name="city" required
                                    placeholder="Paris,France">
                            </div>
                            <div class="row">
                                <label>Période/</label>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Du</label>
                                        <div class="input-append date dateinput" id="dp1" data-date=""
                                            data-date-format="Y/m/d">
                                            <div><input required class="span2" size="16" type="text" value=""
                                                    name="starData">
                                                <span class="add-on"><i class="icon-calendar"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Au</label>
                                        <div class="input-append date dateinput" id="dp2" data-date=""
                                            data-date-format="Y/m/d">
                                            <input class="span2" size="16" type="text" value="" name="endData">
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" style="margin: 25px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="dp3" value="today">
                                            <label class="form-check-label" for="gridCheck">
                                                Toujour en cours
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required class="form-control" name="text" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Rajouter</button>
                        </form>
                    </div>
                    <button type="button" id="AddExp" class="btn btn-primary btn-lg">Rajouter</button>
                </div>
                <hr>
                <br>
                @foreach ($experiences as $experience )
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">

                <div class="formblock" id="BlockExpUpdate{{$experience->id}}" style="display: none;">
                        <div ><button onclick="closeExpUpdate({{$experience->id}})" class="close-btn">X</button></div>
                        <form action="{{route('updateExperience')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label>Société </label>
                                <input type="text" class="form-control" id="skill" name="society" required
                                    placeholder="Nom de votre client ou employeur" value="{{$experience->society}}">
                            </div>

                            <select id="exp-area" name="category" required="" data-original-title="" title="">
                                <option value="" default="" disabled="" selected="">Secteur d'activité </option>
                                <option value="AVIATION_AEROSPACE">
                                    Aéronautique &amp; aérospatiale
                                </option>
                                <option value="IT">
                                    Agence &amp; SSII
                                </option>
                                <option value="FOOD">
                                    Agroalimentaire
                                </option>
                                <option value="ARCHITECTURE">
                                    Architecture &amp; urbanisme
                                </option>
                                <option value="CRAFTS">
                                    Arts &amp; artisanat
                                </option>
                                <option value="CIVIC_SOCIAL">
                                    Associatif et syndical
                                </option>
                                <option value="AUTOMOBILE">
                                    Automobile
                                </option>
                                <option value="BANKING_INSURANCE">
                                    Banque &amp; assurances
                                </option>
                                <option value="BIOTECH">
                                    Biotechnologies
                                </option>
                                <option value="CIVIL_ENGINEERING">
                                    BTP &amp; construction
                                </option>
                                <option value="RESEARCH">
                                    Centres de recherche
                                </option>
                                <option value="CHEMICAL">
                                    Chimie
                                </option>
                                <option value="FILM">
                                    Cinéma &amp; audiovisuel
                                </option>
                                <option value="SMALL_RETAIL">
                                    Commerce de détail
                                </option>
                                <option value="CONSULTING">
                                    Conseil &amp; audit
                                </option>
                                <option value="CULTURE">
                                    Culture
                                </option>
                                <option value="MILITARY">
                                    Défense &amp; armée
                                </option>
                                <option value="LEISURE">
                                    Divertissements &amp; loisirs
                                </option>
                                <option value="E_COMMERCE">
                                    E-commerce
                                </option>
                                <option value="PUBLISHING">
                                    Edition
                                </option>
                                <option value="EDUCATION">
                                    Education &amp; e-learning
                                </option>
                                <option value="SOFTWARE">
                                    Edition de logiciels
                                </option>
                                <option value="ENERGY">
                                    Energie
                                </option>
                                <option value="ENVIRONMENT">
                                    Environnement
                                </option>
                                <option value="RETAIL">
                                    Grande distribution
                                </option>
                                <option value="HIGH_TECH">
                                    High tech
                                </option>
                                <option value="HOSPITALITY">
                                    Hôtellerie
                                </option>
                                <option value="REAL_ESTATE">
                                    Immobilier
                                </option>
                                <option value="IMPORT_EXPORT">
                                    Import &amp; export
                                </option>
                                <option value="MECHANICAL">
                                    Ingénierie mécanique
                                </option>
                                <option value="PRIMARY">
                                    Industrie matières premières
                                </option>
                                <option value="PHARMA">
                                    Industrie pharmaceutique
                                </option>
                                <option value="GAMES">
                                    Jeux vidéo &amp; animation
                                </option>
                                <option value="LUXURY">
                                    Luxe
                                </option>
                                <option value="COSMETICS">
                                    Mode &amp; cosmétiques
                                </option>
                                <option value="NANOTECH">
                                    Nanotechnologies
                                </option>
                                <option value="IOT">
                                    Internet des objets
                                </option>
                                <option value="PRESS">
                                    Presse &amp; médias
                                </option>
                                <option value="SOCIAL">
                                    Réseaux sociaux
                                </option>
                                <option value="HR">
                                    Ressources humaines
                                </option>
                                <option value="RESTAURANTS">
                                    Restauration
                                </option>
                                <option value="HEALTH">
                                    Santé &amp; bien-être
                                </option>
                                <option value="MEDICAL">
                                    Secteur médical
                                </option>
                                <option value="PUBLIC">
                                    Secteur public &amp; collectivités
                                </option>
                                <option value="SAFETY">
                                    Sécurité civile
                                </option>
                                <option value="SPORTS">
                                    Sport
                                </option>
                                <option value="TELECOM">
                                    Télécommunications
                                </option>
                                <option value="TRANSPORT">
                                    Transports
                                </option>
                                <option value="LOGISTIC">
                                    Logistique &amp; Supply Chain
                                </option>
                                <option value="TRAVEL">
                                    Voyage &amp; tourisme
                                </option>
                                <option value="WINE">
                                    Vins &amp; Spiritueux
                                </option>
                            </select>
                            <div class="form-group">
                                <label>Titre </label>
                                <input type="text" class="form-control" id="skill" name="title" required
                                    placeholder="Rôle ou type de réalisation" value="{{$experience->title}}">
                            </div>
                            <div class="form-group">
                                <label>Lieu </label>
                                <input type="text" class="form-control" id="skill" name="city" required
                                    placeholder="Paris,France" value="{{$experience->city}}">
                            </div>
                            <div class="row">
                                <label>Période/</label>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Du</label>
                                        <div class="input-append date dateinput" id="dp1" data-date=""
                                            data-date-format="Y/m/d">
                                            <div><input required class="span2" size="16" type="text" value="{{$experience->starData}}"
                                                    name="starData">
                                                <span class="add-on"><i class="icon-calendar"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Au</label>
                                        <div class="input-append date dateinput" id="dp2" data-date=""
                                            data-date-format="Y/m/d">
                                            <input class="span2" size="16" type="text" value="@if ($experience->endData == null) @else {{$experience->endData}} @endif" name="endData">
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" style="margin: 25px;">
                                        <div class="form-check">
                                            <input class="form-check-input" @if ($experience->today == 1)checked @else @endif type="checkbox" id="dp3" value="today">
                                            <label class="form-check-label" for="gridCheck" >
                                                
                                            
                                                Toujour en cours
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="id" name="id" type="hidden" value="{{$experience->id}}">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required class="form-control" name="text" id="exampleFormControlTextarea1"
                                    rows="3">{{$experience->text}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                        </form>
                    </div>
                    <div class="resume-content " id="BlockExp{{$experience->id}}">
                    <form action="{{ route('deleteExperience') }}" method='POST' >
                    @csrf
                    <input id="id" name="titledelete"   type="hidden" value="{{$experience->title}}">
                    <button type="submit" title="Supprimer"
                        class="btn btn-primary btn-sm">x</button></li>
                        </form>
                        
                        <h3 class="mb-0 text-primary">{{ $experience->title }}</h3>

                        <h5 class=" text-body">{{ $experience->starData}} -> @if($experience->endData== null)AUJOURDUI'HUI @else{{ $experience->endData }} @endif</h5>
                            
                        <div class="subheading mb-3">{{ $experience->society }}<span class="text-body">|
                                {{ucwords($experience->city,",") }} </span>
                        </div>
                        <p>{{ $experience->text }}</p>
                        <button type="button" onclick="OpenExpUpdate({{$experience->id}})" id="" class="btn btn-primary btn-lg">Modifier</button>
                    </div>
                </div>
                @endforeach
                <hr>
            </div>
    </div>
</div>
</section>


@endif



<!-- FORMATION  empty  -->

@if ($educations->isEmpty())
    <div class="container" style='margin-top: 100px;'>
    <div class="row d-flex">
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Formations</h2>
                    <div class="formblock" id="formSchool" style="display: none;">
                        <div id="CloseSchoolDiv"><button class="close-btn">X</button></div>
                        <form action="{{route('sendEducation')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label>Diplôme </label>
                                <input type="text" class="form-control" id="degree" name="degree" required
                                    placeholder="Le titre de votre diplôme">
                            </div>
                            <div class="form-group">
                                <label>Ecole</label>
                                <input type="text" class="form-control" id="skill" name="school" required
                                    placeholder="Nom de votre école">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Année d'obtention</label>
                                       <div class="input-append date" id="dpMonths" data-date="2020" data-date-format="yyyy"  >
                                  <input class="span2" size="16" type="text" placeholder="2019" name="Date">
                                  </div>                  
                                  </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" style="margin: 25px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="dp3" name="today" value="1">
                                            <label class="form-check-label" for="gridCheck">
                                                Toujour en cours
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required class="form-control" placeholder="Indiquez le contenu de votre formation" name="text" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Rajouter</button>
                        </form>
                    </div>
                    <button type="button" id="AddSchool" class="btn btn-primary btn-lg">Rajouter</button>
                </div>
                <hr>
                <br>
<!-- FORMATION  Exemple  -->
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5" id="closeSchoolDiv">
                    <div class="resume-content">
                        <h3 class="mb-0 text-primary">Senior Web Developer</h3>

                        <h5 class=" text-body">March 2013 - Present </h5>
                        <div class="subheading mb-3">Intelitec Solutions <span class="text-body">| Paris </span>
                        </div>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                            of
                            the day, going forward, a new normal that has evolved from generation X is on the runway
                            heading towards a streamlined cloud solution. User generated content in real-time will
                            have
                            multiple touchpoints for offshoring.</p>
                    </div>
                </div>
                <hr>
            </div>
    </div>
</div>

    @else
    <div class="container" style='margin-top: 100px;'>
    <div class="row d-flex">
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2>Formations</h2>
                         <div class="formblock" id="formSchool" style="display: none;">
                        <div id="CloseSchoolDiv"><button class="close-btn">X</button></div>
                        <form action="{{route('sendEducation')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label>Diplôme </label>
                                <input type="text" class="form-control" id="degree" name="degree" required
                                    placeholder="Le titre de votre diplôme">
                            </div>
                            <div class="form-group">
                                <label>Ecole</label>
                                <input type="text" class="form-control" id="skill" name="school" required
                                    placeholder="Le nom de votre école">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Année d'obtention</label>
                                       <div class="input-append date" id="dpMonths" data-date="2020" data-date-format="yyyy"  >
                                  <input class="span2" size="16" type="text" placeholder="2019" name="Date">
                                  </div>                  
                                  </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" style="margin: 25px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="dp3" name="today" value="1">
                                            <label class="form-check-label" for="gridCheck">
                                                Toujour en cours
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required class="form-control" placeholder="Indiquez le contenu de votre formation" name="text" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Rajouter</button>
                        </form>
                    </div>
                    <button type="button" id="AddSchool" class="btn btn-primary btn-lg">Rajouter</button>
                </div>
                <hr id="closeSchoolDiv">
                <br>
    @foreach ($educations as $education )
    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
     <div class="formblock" id="BlockSchoolUpdate{{$education->id}}" style="display: none;">
                        <div ><button onclick="closeSchoolUpdate({{$education->id}})" class="close-btn">X</button></div>
                        <form action="{{route('updateEducation')}}" method='POST'>
                            @csrf
                            <div class="form-group">
                                <label>Diplôme </label>
                                <input type="text" class="form-control" id="degree" name="degree" required
                                    placeholder="Nom de votre client ou employeur" value="{{$education->degree}}">
                            </div>
                            <div class="form-group">
                                <label>Ecole</label>
                                <input type="text" class="form-control" id="skill" name="school" required
                                    placeholder="Rôle ou type de réalisation" value="{{$education->school}}">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Année d'obtention</label>
                                       <div class="input-append date" id="dpMonths" data-date="2020" data-date-format="yyyy"  >
                                  <input class="span2" size="16" type="text" placeholder="2019" name="Date" value="{{$education->endData}}">
                                  </div>                  
                                  </div>
                                </div>
                                  <input id="id" name="id" type="hidden" value="{{$education->id}}">
                                <div class="col">
                                    <div class="form-group" style="margin: 25px;">
                                        <div class="form-check">
                                            <input class="form-check-input" @if ($education->today == 1)checked @else @endif type="checkbox" id="dp3" name="today" value="1">
                                            <label class="form-check-label" for="gridCheck">
                                                Toujour en cours
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required class="form-control" placeholder="Indiquez le contenu de votre formation" name="text" id="exampleFormControlTextarea1"
                                    rows="3">{{$education->text}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                        </form>
                    </div>
                    <div class="resume-content " id="BlockSchool{{$education->id}}">
                    <form action="{{ route('deleteEducation') }}" method='POST' >
                    @csrf
                    <input id="id" name="degreedelete" type="hidden" value="{{$education->degree}}">
                    <button type="submit" title="Supprimer"
                        class="btn btn-primary btn-sm">x</button></li>
                        </form>
                        <h3 class="mb-0 text-primary">{{ $education->degree }}</h3>

                        <h5 class=" text-body">@if($education->endData== null)En cours @else En {{ $education->endData }}  @endif </h5>
                        <div class="subheading mb-3">{{ $education->school }} <span class="text-body">  </span>
                        </div>
                        <p>{{ $education->text }}</p>
                         <button type="button" onclick="OpenSchoolUpdate({{$education->id}})" id="" class="btn btn-primary btn-lg">Modifier</button>
                    </div>
                </div>
  
    @endforeach
          <hr>
            </div>
    </div>
</div>
    @endif



@endsection
