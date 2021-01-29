<?php 
$navProfil = "active";

?>
@extends('layouts.createprofil')



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





<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb mt-6">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex ">
                <div class="img d-flex align-self-stretch align-items-center" id='closeimg'
                    style="background-image:url({{url("/images/default.jpg)")}};">
                </div>
            </div>
            <div class="formblock" id="formblock" style="display: none;">
                <div id="close"><button class="close-btn">X</button></div>
                <form action="{{ route('creatUser') }}" method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" id="title" name="name" required
                            placeholder="Entrer votre Nom" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" id="author" name="firstname" required
                            placeholder="Entrer votre le Prénom " value="{{Auth::user()->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Photo de profil</label>
                        <input required type="file" class="form-control-file" id="image" name='image'>
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
                        <label>Votre métier</label>
                        <input required type="text" class="form-control" id="texte" name="job"
                            placeholder="Votre déscription du post">
                    </div>
                    <div class="form-group">
                        <label>Votre ville</label>
                        <input required type="text" class="form-control" id="source" name="city"
                            placeholder="La ville où vous chercher un post!">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required type="text" class="form-control" id="link" name="email"
                            placeholder="Entrer votre adresse email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label>Présentez-vous de manière chaleureuse en quelques lignes et n'hésitez pas à lister les
                            types de projets sur lesquels vous pouvez intervenir, les méthodologies que vous utilisez,
                            les compétences techniques maitrisées ou encore les livrables que vous pouvez
                            fournir.</label>
                        <textarea required class="form-control" name="about" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ce que vous recherchez!</label>
                        <textarea required class="form-control" name="presentation" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <button type="submit" id="valider" class="btn btn-primary btn-lg">Envoyer</button>
                </form>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-5" id='closediv'>
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2>Votre prénom et nom</h2>
                            <h3 class="text-primary"> Votre activité <span class="text-body"> Localisation</span></h3>
                            <br>
                            <h5><span class="iconspan icon-envelope"></span> Email </h5>
                            <br>
                            <hr>
                            <h5> Vous en quelques mots</h5>
                            <h5>Ce que vous recherchez!</h5>
                            <br>
                            <button type="button" id="boutonForm" class="btn btn-primary btn-lg">Créer mon
                                Profil</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>











@endsection
