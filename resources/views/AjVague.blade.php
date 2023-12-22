@extends('layouts.master')
@section('titre-admin')
Ajout Vague
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter une Vague &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('AddVague')}}" method="post" class="add-cat">
        @csrf
        {!!$errors->first('heureVague','<span class= "diso">:message</span>') !!}
        <input type="text" name="heureVague" id="" placeholder="Ajouter Une vague ...">
        
        
        <button type="submit">&#127891; Ajouter une vague</button>
    </form>

</section>
@endsection