@extends('layouts.master')
@section('titre-admin')
Hopes Gestion
@endsection
@section('contenu')
<section id="contenu">
  <h5 class="text-right ">Nb Etudiant total: {{$nbEtudiant}}</h5>
  <h1>Nos Etudiants</h1>
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
      <p>{{$etudiants->links()}}</p>

    </div>
  </div>
</section>
@endsection