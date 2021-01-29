<?php 
$nav = "active";


?>
@extends('authAdmin.layouts.app')
@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modifier un Article!</h1>
      </div>
       @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
      <form action="{{ route('yoda.article.updateArticle') }}" method='POST' enctype="multipart/form-data">
      @csrf
      
     @foreach ($article as $articles )
  <div class="form-group">
  <input id="id" name="id" type="hidden" value="{{$articles->id}}">
    <label >TITRE</label>
    <input type="text" class="form-control" id="title" name="title"  aria-describedby="emailHelp" placeholder="Entrer le titre de l'article" value="{{$articles->title}}">
  </div>
  <div class="form-group">
    <label>Auteur</label>
    <input type="text" class="form-control" id="author" name="author"  placeholder="Entrer le nom de l'auteur" value="{{$articles->author}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Categories</label>
    <select  class="form-control" id="category" name='category'>
      <option value = '1'>News</option>
      <option value = '2'>Économie 21th</option>
      <option value = '3'>CV Mode d'emplois</option>
      <option value = '4'>L'entretien d'embauche</option>
      <option value = '5'>Nos conseils</option>
      <option value = '6'>Les sites de recherche d'emploi</option>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Image de Couverture </label>
    <img src='{{url("$articles->image")}}' height="150"> 
    <input type="file" class="form-control-file" id="img" name='image' >
  </div>
  <div class="form-group">
    <label>Texte D'accroche</label>
    <input type="text" class="form-control" id="texte" name="texte"  placeholder="Entrer le texte d'acroche"  value="{{$articles->texte}}">
  </div>
  <div class="form-group">
    <label>Nom de la source</label>
    <input type="text" class="form-control" id="source" name="source"  placeholder="Entrer le nom de la source"  value="{{$articles->source}}">
  </div>
  <div class="form-group">
    <label>Lien de la source</label>
    <input type="text" class="form-control" id="link" name="link"  placeholder="Entrer le lien de la source"  value="{{$articles->link}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu de l'article</label>
    <textarea class="description form-control" name="content" >{{$articles->content}}</textarea>
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
         plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table paste imagetools wordcount"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ],
        selector:'textarea.description',
        width: 1200,
        height: 500
    });
</script>
     @endforeach
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>

    </main>
  </div>
</div>

<div>
 
@endsection