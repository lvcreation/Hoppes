@extends('layouts.master')
@section('titre-admin')
Recherche Avancé
@endsection
@section('contenu')
<section id="contenu">
    
  <h1>Recherche Avancé par ecolage</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="{{route('searchAdvanced4')}}" method="post">
            @csrf
            <table width=100% border="2">
                <tr >
                    <th class="text-center pt-4 pb-4">Formation</th>
                    <th class="text-center pt-4 pb-4 ">statue</th>
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
                        <select name="statue" id="" class="w-75">
                           <option value="1">Actif</option>
                           <option value="2">Perfectionnement</option>
                           <option value="3">Ancien</option>
                           <option value="4">Stand by</option>
                           <option value="5">Famille</option>
                           
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center pt-4 pb-4">
                        <button type="submit" class="btn btn-outline-success "><i class="ti-search mr-2"></i>Recherche spécifique</button>
                    </td>
                </tr>
            </table>
        </form>
      </div>
    </div>
    
</section>
@endsection