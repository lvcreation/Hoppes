@extends('layouts.master')
@section('titre-admin')
Ajout Personnel
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter un Personnel &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
<form action="{{route('AddPersonnel')}}" method="post" class="add-cat" enctype="multipart/form-data" >
        @csrf
        {!!$errors->first('nomPers','<span class= "diso">:message</span>') !!}
        <input type="text" name="nomPers" id="" placeholder="Ajouter Un nom ...">
        {!!$errors->first('prenomPers','<span class= "diso">:message</span>') !!}
        <input type="text" name="prenomPers" id="" placeholder="Ajouter Une prenom ...">
        {!!$errors->first('AdressePers','<span class= "diso">:message</span>') !!}
        <input type="text" name="AdressePers" id="" placeholder="Ajouter Une adresse ...">
        {!!$errors->first('numPers','<span class= "diso">:message</span>') !!}
        <input type="text" name="numPers" id="" placeholder="Ajouter Une numero téléphone ...">
        {!!$errors->first('saryPers','<span class= "diso">:message</span>') !!}
        <input type="file" name="saryPers" id="" >
        
        
        
        <button type="submit" class="w-100">&#127891; Ajouter un personnel</button>
    </form>

</section>
@endsection