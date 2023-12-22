@extends('layouts.master')
@section('titre-admin')
Recherche Avancé
@endsection
@section('contenu')
<section id="contenu">
    
  <h1>Recherche Avancé par entrée</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="{{route('searchAdvanced3')}}" method="post">
            @csrf
            <table width=100% border="2">
                <tr >
                    <th class="text-center pt-4 pb-4">Formation</th>
                    <th class="text-center pt-4 pb-4 ">Entrer</th>
                    <th class="text-center pt-4 pb-4 ">Vague</th>
                </tr>
                <tr>
                    <td class="text-center pt-4 pb-4">
                        <select name="formation" id="" class="w-75">
                            @foreach ($categories as $formation)
                                <option value="{{$formation->nom}}">{{$formation->nom}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="text-center pt-4 pb-4">
                        <select name="vague" id="" class="w-75">
                            @foreach ( $vagues as $de )
                                <option value="{{$de->Heure}}">{{$de->Heure}}</option>  
                               
                           @endforeach
                        </select>
                    </td>
                    <td class="text-center pt-4 pb-4">
                        <select name="mois" id="" class="w-75">
                            <option value="mois1">Mois 1</option>
                            <option value="mois2">Mois 2</option>
                            <option value="mois3">Mois 3</option>
                            <option value="mois4">Mois 4</option>
                            <option value="mois5">Mois 5</option>
                            
                         </select><br><br>
                        <select name="ecolage" id="" class="w-75">
                            @foreach ($ecolages as $eco)
                                <option value="{{$eco->mois1}}">{{$eco->mois1}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center pt-4 pb-4">
                        <button type="submit" class="btn btn-outline-success "><i class="ti-search mr-2"></i>Recherche spécifique</button>
                    </td>
                </tr>
            </table>
        </form>
      </div>
    </div>
    
    
</section>
@endsection