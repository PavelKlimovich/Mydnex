@extends('authAdmin/layouts/app')



@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Les Utilisateurs </h1>
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
          @foreach ($user as $users )
            <tr>
              <td>{{$users->id}}</td>
              <td>{{$users->name}}</td>
              <td>{{ $users->firstname }}</td>
              <td>{{$users->email}}</td>
              <td>{{$users->updated_at}}</td>
             
           @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<div>

@endsection