@extends('layouts.master')
@section('titre-admin')
    Ajout Testimonial
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter  Testimonial &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('addTestimonial')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('nom','<span class= "diso">:message</span>') !!}
        <input type="text" name="nom" id="" placeholder="Ajouter Un nom ...">
        {!!$errors->first('prenom','<span class= "diso">:message</span>') !!}
        <input type="text" name="prenom" id="" placeholder="Ajouter Un prénom ...">
        {!!$errors->first('description','<span class= "diso">:message</span>') !!}
        {{-- <input type="text" name="description" id="" placeholder="Ajouter Une adresse ..."> --}}
        <textarea name="description" id="" cols="30" rows="10" placeholder="votre description"></textarea>
        
        {!!$errors->first('imageTestimonial','<span class= "diso">:message</span>') !!}
        <input type="file" name="imageTestimonial" id="" class="pt-3">
        <button type="submit" class="w-100">&#127891; Ajouter Testimonial</button>
    </form>

</section>
@endsection