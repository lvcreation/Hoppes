@extends('layouts.master')
@section('titre-admin')
Recherche Avancé
@endsection
@section('contenu')
<section id="contenu">
  
  <h1>Recherche Avancé par vague</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="{{route('searchAdvanced')}}" method="post">
            @csrf
            <table width=100% border="2">
                <tr >
                    <th class="text-center pt-4 pb-4">Formation</th>
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
                            <optgroup label="Vague">
                                @foreach ($vagues as $mpianatra)
                                <option value="{{$mpianatra->Heure}}">{{$mpianatra->Heure}}</option>
                            @endforeach
                            </optgroup>
                           
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