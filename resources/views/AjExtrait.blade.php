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
    <form action="{{route('AddExtrait')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('Nom','<span class= "diso">:message</span>') !!}
        <input type="text" name="Nom" id="" placeholder="Nom ...">
        {!!$errors->first('LienGithub','<span class= "diso">:message</span>') !!}
        <input type="text" name="LienGithub" id="" placeholder="Lien Github ..."> 
        <div class="row mb-3">
            <label for="card" class="col-md-4 col-form-label text-md-end">Card </label>

            <div class="col-md-6">
                <select name="card" id="Role">
                    <option value="Admin">card-1</option>
                    <option value="Membre">card-2</option>
                    <option value="SuperAdmin">card-3</option>
                    <option value="SuperAdmin">card-4</option>

                </select>
            </div>
        </div>   
        {!!$errors->first('imageExtrait','<span class= "diso">:message</span>') !!}
        <input type="file" name="imageExtrait" id="" class="pt-3">
        <button type="submit" class="w-100">&#127891; Ajouter Un Evenement</button>
    </form>

</section>
@endsection