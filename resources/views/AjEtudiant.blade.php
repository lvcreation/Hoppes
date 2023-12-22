@extends('layouts.master')
@section('titre-admin')
Ajout Etudiant
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Ajouter  Etudiant &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('AddEtudiant')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('nom','<span class= "diso">:message</span>') !!}
        <input type="text" name="nom" id="" placeholder="Ajouter Un nom ...">
        {!!$errors->first('prenom','<span class= "diso">:message</span>') !!}
        <input type="text" name="prenom" id="" placeholder="Ajouter Un prénom ...">
        {!!$errors->first('adresse','<span class= "diso">:message</span>') !!}
        <input type="text" name="adresse" id="" placeholder="Ajouter Une adresse ...">
        {!!$errors->first('phone','<span class= "diso">:message</span>') !!}
        <input type="text" name="phone" id="" placeholder="Ajouter Une numero telephone ...">
        {!!$errors->first('Ephone','<span class= "diso">:message</span>') !!}
        <input type="text" name="Ephone" id="" placeholder="Ajouter Une telephone d'urgence...">
        {!!$errors->first('Vague','<span class= "diso">:message</span>') !!}
        <label for="choix-categorie">Selectionné une vague :</label>
        <select name="Vague" id="choix-categorie" class="text-white bg-dark">
            <option value="">Vague</option>
           @foreach ($vague as $vagy)
           <option value="{{$vagy->Heure}}">{{$vagy->Heure}}</option>           
           @endforeach
        </select>
        {!!$errors->first('formation','<span class= "diso">:message</span>') !!}
        <label for="choix-categorie">Selectionné une formation :</label>
        <select name="formation" id="choix-categorie" class="text-white bg-dark">
            <option value="">Formation</option>
           @foreach ($formation as $formations)
           <option value="{{$formations->nom}}">{{$formations->nom}}</option>               
           @endforeach
        </select>
        {!!$errors->first('duree','<span class= "diso">:message</span>') !!}
        <label for="choix-categorie">Selectionné la durée du formation :</label>
        <select name="duree" id="choix-categorie" class="text-white bg-dark">
            <option value="">Durée Formation</option>
            @foreach ($duree as $durees)
            <option value="{{$durees->mois}}">{{$durees->mois}}</option>               
            @endforeach
           
        </select>
        
        
       
            
            {!!$errors->first('droit','<span class= "diso">:message</span>') !!}
        <label for="choix-categorie">Droit:</label>
        <select name="droit" id="choix-categorie" class="text-white bg-dark">
            <option value="">Droit</option>
           @foreach ($droit as $fidirana)
           <option value="{{$fidirana->droit}}" >{{$fidirana->droit}}</option>           
           @endforeach
        </select>
        <label for="Entrer" class="text-center w-100">Date d'entrée</label>
        {!!$errors->first('Entrer','<span class= "diso">:message</span>') !!}
        <input type="date" name="Entrer" id="Entrer">
        <label for="Sortie" class="text-center w-100">Date de sortie</label>
        {!!$errors->first('Sortie','<span class= "diso">:message</span>') !!}
        <input type="date" name="Sortie" id="Sortie">
        <label for="">Image de l'etudiant</label>
        {!!$errors->first('saryEtudiant','<span class= "diso">:message</span>') !!}
        <input type="file" name="saryEtudiant" id="" class="pt-3">
        <button type="submit" class="w-100">&#127891; Ajouter Etudiant</button>
    </form>

</section>
@endsection