@extends('layouts.master')
@section('titre-admin')
Gestion ecolage
@endsection
@section('contenu')
<section id="contenu">
  <h5 class="text-right ">Nb Etudiant total: {{$nbEtudiant}}</h5>
  <h2>
    Ecolage
    <ul class="liste-items">
        <li class="items">
          Inscription
          <span>&#9660;</span>
          <ul class="sous-listes-items">
            <li class="sous-items"><a href="{{route('inscription')}}">Mois1</a></li>
            <li class="sous-items"><a href="{{route('inscrsemaine')}}">Mois2</a></li>
            <li class="sous-items"><a href="{{route('inscrmois')}}">Mois3</a></li>
            <li class="sous-items"><a href="{{route('inscrmois')}}">Mois4</a></li>
            <li class="sous-items"><a href="{{route('inscrmois')}}">Mois5</a></li>
          </ul>
        </li>
      </ul>
  </h2>
  @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="liste">
          <ul>
            <li><a href="{{route('accueil')}}">Tous</a></li>
            @foreach ($categories as $categor)
              <li><a href="{{url('choix_formation/'.$categor->nom)}}">{{$categor->nom}}</a></li>              
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($etudiants as $mpianatra)
      <div class="col-lg-3 mt-4">
        <div class="etudiants">
          <img src="{{asset('storage/admin/my_images/'.$mpianatra->sary)}}" alt="Etudiants" width="100%" height="150px">
          <h3>{{$mpianatra->nom}}</h3>
          <h4><span class="ti-mobile">Phone:</span> {{$mpianatra->phone}} </h4>
          <a href="{{url('detailEtudiants/'.$mpianatra->id)}}" class="btn btn-outline-primary "><i class="ti-user"></i> Voir plus</a>
        </div>
      </div>   
      @endforeach
    </div>
    <div class="paginate mt-4 d-flex  justify-content-center ">
      <p>{{$Tetudiant->links()}}</p>

    </div>
  </div>
</section>
@endsection