@extends('layouts.master')
@section('titre-admin')
Modification Etudiant
@endsection
@section('contenu')
<section id="categorie">
    <h1 class="cat-titre">&#128190; Modifier  Etudiant &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('EditEtudiant')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('nom','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Nom:</label>
        <input type="text" name="nom" id="" value="{{$etudiants->nom}}">
        {!!$errors->first('prenom','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Prenom:</label>
        <input type="text" name="prenom" id="" value="{{$etudiants->prenom}}">
        {!!$errors->first('adresse','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Adresse:</label>
        <input type="text" name="adresse" id="" value="{{$etudiants->adresse}}">
        {!!$errors->first('phone','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Téléphone:</label>
        <input type="text" name="phone" id="" value="{{$etudiants->phone}}">
        {!!$errors->first('Ephone','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Téléphone d'urgence:</label>
        <input type="text" name="Ephone" id="" value="{{$etudiants->Ephone}}">
        {!!$errors->first('Vague','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Vague:</label>
        <input type="text" name="Vague" id="" value="{{$etudiants->nom_du_vague}}">     
        {!!$errors->first('formation','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Formation:</label>
        <input type="text" name="formation" id="" value="{{$etudiants->formation}}">     
        {!!$errors->first('duree','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Duree:</label>
        <input type="text" name="duree" id="" value="{{$etudiants->duree}}">     
        {!!$errors->first('droit','<span class= "diso">:message</span>') !!}
        <label for="" class="text-center w-100">Droit:</label>
        <input type="text" name="droit" id="" value="{{$etudiants->droit}}">     
        <label for="Entrer" class="text-center w-100">Date d'entrée</label>
        {!!$errors->first('Entrer','<span class= "diso">:message</span>') !!}
        <input type="text" name="Entrer" id="Entrer" value="{{$etudiants->entrer}}">
        <label for="Sortie" class="text-center w-100">Date de sortie</label>
        {!!$errors->first('Sortie','<span class= "diso">:message</span>') !!}
        <input type="text" name="Sortie" id="Sortie" value="{{$etudiants->sortie}}">
        {!!$errors->first('statue','<span class= "diso">:message</span>') !!}
        <label for="">Statue</label>
        <select name="statue" id="" class="text-white" style="background-color:black;">
          <option value="{{$etudiants->statue}}" style="background-color:black;" >Etudiant actif</option>
          <option value="2"  style="background-color:black;">Attente de stage</option>
          <option value="3" style="background-color:black;">Etudiant sortant</option>
          <option value="4" style="background-color:black;">Etudiant standby</option>
          <option value="5" style="background-color:black;">Etudiant famille</option>
        </select>
        <label for="">Image de l'etudiant</label>
        {!!$errors->first('saryEtudiant','<span class= "diso">:message</span>') !!}
        <img src="{{asset('storage/admin/my_images/'.$etudiants->sary)}}" alt="etudiant" width="60px" height="60px">
        <input type="file" name="saryEtudiant" id="">
        <input type="hidden" name="id" value="{{$etudiants->id}}">
        <input type="hidden" name="sary" value="{{$etudiants->sary}}">
        <button type="submit" class="w-100">&#127891; Modifier Etudiant</button>
    </form>

</section>
@endsection