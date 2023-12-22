@extends('layouts.master')
@section('titre-admin')
Modifier Ecolage
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Modifier une Ecolage &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('EditEcolage')}}" method="post" class="add-cat">
        @csrf
        <input type="hidden" name="id" value="{{$ecolages->id}}">
        {!!$errors->first('Ecolage1','<span class= "diso">:message</span>') !!}
        <label for="">Mois 1 :</label>
        <input type="text" name="Ecolage1" id="" value="{{$ecolages->mois1}}" >
        {!!$errors->first('Ecolage2','<span class= "diso">:message</span>') !!}
        <label for="">Mois 2 :</label>
        <input type="text" name="Ecolage2" id="" value="{{$ecolages->mois2}}">
        {!!$errors->first('Ecolage3','<span class= "diso">:message</span>') !!}
        <label for="">Mois 3 :</label>
        <input type="text" name="Ecolage3" id="" value="{{$ecolages->mois3}}">
        {!!$errors->first('Ecolage4','<span class= "diso">:message</span>') !!}
        <label for="">Mois 4 :</label>
        <input type="text" name="Ecolage4" id="" value="{{$ecolages->mois4}}">
        {!!$errors->first('Ecolage5','<span class= "diso">:message</span>') !!}
        <label for="">Mois 5 :</label>
        <input type="text" name="Ecolage5" id="" value="{{$ecolages->mois5}}">
        <button type="submit" class="w-100">&#127891; Modifier une ecolage</button>
    </form>

</section>
@endsection