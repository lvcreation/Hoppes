@extends('layouts.master')
@section('titre-admin')
Hopes Gestion
@endsection
@section('contenu')
<section id="contenu">
    @if(Session::has('search'))
      <p class ="alert alert-primary text-center mt-4">
          {{Session::get('search')}}
          {{Session::put('search',null)}}<!-- ny dikany dia reef avy ita ka manao reload dia miala ilay sms-->
      </p>
    @endif
  <h1>Nos Etudiants</h1>
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
      <div class="col-lg-3">
        <div class="etudiants">
          <img src="{{asset('storage/admin/my_images/'.$mpianatra->sary)}}" alt="Etudiants" width="100%" height="150px">
          <h3>{{$mpianatra->nom}}</h3>
          <h4><span class="ti-mobile">Phone:</span> {{$mpianatra->phone}} </h4>
          <a href="{{url('detailEtudiants/'.$mpianatra->id)}}" class="btn btn-outline-primary "><i class="ti-user"></i> Voir plus</a>
        </div>
      </div>   
      @endforeach
    </div>
    
  </div>
</section>
@endsection