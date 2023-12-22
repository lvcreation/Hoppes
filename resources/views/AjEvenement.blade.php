@extends('layouts.master')
@section('titre-admin')
    Ajout Testimonial
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter  Evenement &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('AddEvenement')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('NomEvenement','<span class= "diso">:message</span>') !!}
        <input type="text" name="NomEvenement" id="" placeholder="Nom evenement ...">
        {!!$errors->first('DateEvenement','<span class= "diso">:message</span>') !!}
        <input type="date" name="DateEvenement" id="" placeholder="Date evenement ...">
        {!!$errors->first('DescEvenement','<span class= "diso">:message</span>') !!}
        <textarea name="DescEvenement" id="" cols="30" rows="10" placeholder="Description de l'evenement"></textarea>        
        {!!$errors->first('ImageEvenement','<span class= "diso">:message</span>') !!}
        <input type="file" name="ImageEvenement" id="" class="pt-3">
        <button type="submit" class="w-100">&#127891; Ajouter Un Evenement</button>
    </form>

</section>
@endsection