@extends('layouts.master')
@section('titre-admin')
Ajout Formations
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter une Formation &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('AddFormation')}}" method="post" class="add-cat">
        @csrf
        {!!$errors->first('nomFormation','<span class= "diso">:message</span>') !!}
        <input type="text" name="nomFormation" id="" placeholder="Ajouter Une formation ...">
        
        
        <button type="submit" class="w-100">&#127891; Ajouter une formation</button>
    </form>

</section>
@endsection