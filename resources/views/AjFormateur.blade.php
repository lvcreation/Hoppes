@extends('layouts.master')
@section('titre-admin')
Ajout Formateur
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter  Formateur &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('addFormateur')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('anarana','<span class= "diso">:message</span>') !!}
        <input type="text" name="anarana" id="" placeholder="Ajouter Un nom ...">
        {!!$errors->first('fanampiny','<span class= "diso">:message</span>') !!}
        <input type="text" name="fanampiny" id="" placeholder="Ajouter Un prénom ...">
        {!!$errors->first('adiresy','<span class= "diso">:message</span>') !!}
        <input type="text" name="adiresy" id="" placeholder="Ajouter Une adresse ...">
        {!!$errors->first('num','<span class= "diso">:message</span>') !!}
        <input type="text" name="num" id="" placeholder="Ajouter Une numero telephone ...">
        
        {!!$errors->first('image','<span class= "diso">:message</span>') !!}
        <input type="file" name="image" id="" class="pt-3">
        <button type="submit" class="w-100">&#127891; Ajouter Formateur</button>
    </form>

</section>
@endsection