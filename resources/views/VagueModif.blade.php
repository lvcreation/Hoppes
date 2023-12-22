@extends('layouts.master')
@section('titre-admin')
Modifier Vague
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Modifier une Vague &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('EditVague')}}" method="post" class="add-cat">
        @csrf
        <input type="hidden" name="id" value="{{$vagues->id}}">
        {!!$errors->first('heureVague','<span class= "diso">:message</span>') !!}
        <input type="text" name="heureVague" id="" value="{{$vagues->Heure}}">
        
        
        <button type="submit">&#127891; Modifier une vague</button>
    </form>

</section>
@endsection