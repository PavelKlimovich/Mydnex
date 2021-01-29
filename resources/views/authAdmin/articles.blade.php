@extends('authAdmin/layouts/app')



@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Les Articles </h1>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Titre</th>
              <th>Categorie</th>
              <th>Auteur</th>
              <th>Date de publication</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($article as $articles )
            <tr>
              <td>{{$articles->id}}</td>
              <td>{{$articles->title}}</td>
              <td>@if ($articles->category== 4  )Entretien d’embauche  @else @endif
              @if ($articles->category== 1  )New  @else @endif
              @if ($articles->category== 2  )Economie  @else @endif
              @if ($articles->category== 3  )Cv Mode D'emploi  @else @endif
              @if ($articles->category== 5  )Nos Conseils  @else @endif
              </td>
              <td>{{$articles->author}}</td>
              <td>{{$articles->updated_at}}</td>
              <td><a type="button" href="{{ url('yoda/ModifierunArticle') }}/{{$articles->slug}}" class="btn btn-lg btn-block btn-outline-warning">Modifier</a></td>
              <td> <form action="{{ route('yoda.article.deleteArcicle') }}" method='POST' >
      @csrf<input id="id" name="id" type="hidden" value="{{$articles->id}}">
      <button type="submit" class="btn btn-lg btn-block btn-outline-danger" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));">Suprimer</button></form></td>

            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<div>

@endsection

