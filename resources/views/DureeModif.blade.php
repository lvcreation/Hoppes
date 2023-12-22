@extends('layouts.master')
@section('titre-admin')
Modification Duree
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Modifier une Duree &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('EditDuree')}}" method="post" class="add-cat">
        @csrf
        <input type="hidden" name="id" value="{{$durees->id}}">
        {!!$errors->first('Duree','<span class= "diso">:message</span>') !!}
        <input type="text" name="Duree" id="" value="{{$durees->mois}}"><label for="">Mois</label>
        
        
        <button type="submit" class="w-100">&#127891; Modifier une droit</button>
    </form>

</section>
@endsection

