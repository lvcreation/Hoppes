@extends('layouts.master')
@section('titre-admin')
    Affichage etudiants
@endsection
@section('contenu')
<div class="row">
    <div class="col-lg-12">
      <div class="table-responsive w-100">
        <table   width="150%" border="1">

          <h1>Liste des étudiants pour le jour</h1>
          <ul>
              @foreach($etudiant as $etud)
                  <li>{{ $etud->nom }} {{ $etud->prenom }}</li>
              @endforeach
          </ul>
          <thead>
            <tr class="bg-info">
                <th class="text-center text-dark"> #</th>
                <th class="text-center text-dark">Photo</th>
                <th class="text-center text-dark">Nom </th>
                <th class="text-center text-dark">Prenom </th> 
                <th class="text-center text-dark">Formation </th>  
                <th class="text-center text-dark">Date d'entrer </th> 
                <th class="text-center text-dark">Droit </th> 
                <th class="text-center text-dark">Vague</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($etudiant as $mpianatra)
            <tr>
                <td class="alert alert-warning text-center text-white"><a href="">{{$mpianatra->id}}</a> </td>
                <td class="text-center link"><a href="{{url('detailEtudiants/'.$mpianatra->id)}}"><img src="{{asset('storage/admin/my_images/'.$mpianatra->sary)}}" alt="" width="60px" height="60px"></a> </td>
                <td class="text-center"><a href="{{url('detailEtudiants/'.$mpianatra->id)}}">{{$mpianatra->nom}}</a></td>
                <td class="text-center"><a href="{{url('detailEtudiants/'.$mpianatra->id)}}">{{$mpianatra->prenom}}</a></td>
                <td class="text-center">{{$mpianatra->formation}}</td>
                <td class="text-center">{{$mpianatra->entrer}}</td>
                <td class="text-center">{{$mpianatra->nom_du_vague}}</td>
            </tr>                                     
           @endforeach
          </tbody>
        </table>
        {{-- <div class="paginate mt-4 d-flex  justify-content-center  mb-4">
          <p>{{$etudiant->links()}}</p>
    
        </div> --}}
      </div>
    </div>
  </div>
@endsection