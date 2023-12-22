@extends('layouts.master')
@section('titre-admin')
Ajout Ecolage
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter une Ecolage &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('AddEcolage')}}" method="post" class="add-cat">
        @csrf
        {!!$errors->first('Ecolage1','<span class= "diso">:message</span>') !!}
        <label for="">Mois 1 :</label>
        <input type="text" name="Ecolage1" id="" placeholder="Ajouter Une Ecolage mois 1 ...">
        {!!$errors->first('Ecolage2','<span class= "diso">:message</span>') !!}
        <label for="">Mois 2 :</label>
        <input type="text" name="Ecolage2" id="" placeholder="Ajouter Une Ecolage mois 2 ...">
        {!!$errors->first('Ecolage3','<span class= "diso">:message</span>') !!}
        <label for="">Mois 3 :</label>
        <input type="text" name="Ecolage3" id="" placeholder="Ajouter Une Ecolage mois 3 ...">
        {!!$errors->first('Ecolage4','<span class= "diso">:message</span>') !!}
        <label for="">Mois 4 :</label>
        <input type="text" name="Ecolage4" id="" placeholder="Ajouter Une Ecolage mois 4...">
        {!!$errors->first('Ecolage5','<span class= "diso">:message</span>') !!}
        <label for="">Mois 5 :</label>
        <input type="text" name="Ecolage5" id="" placeholder="Ajouter Une Ecolage mois 5...">
        <button type="submit" class="w-100">&#127891; Ajouter une ecolage</button>
    </form>

</section>
@endsection