@extends('layouts.master')
@section('titre-admin')
Hopes Gestion
@endsection
@section('contenu')
<section id="contenu">
  <h1>Nos Etudiants</h1>
  <h5 class="text-right ">Nb Etudiant actif : {{$etudiantsIsa}}/{{$nbEtudiant}}</h5>
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('search'))
                <p class ="alert alert-primary text-center mt-4">
                    {{Session::get('search')}}
                    {{Session::put('search',null)}}<!-- ny dikany dia reef avy ita ka manao reload dia miala ilay sms-->
                </p>
            @endif
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
   
  </div>
  <div class="paginate mt-4 d-flex  justify-content-center  mb-4">
    <p>{{$etudiants->links()}}</p>

  </div>
</section>
@endsection