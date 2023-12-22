@extends('Accueil.layoutsAccueil.masterConnexion')
@section('titre-acceueil')
    Inscription
@endsection
@section('contenuConnexion')
<div class="conexion">
    <!-- content  -->
    <div class="conexion_content">
      <!-- inscription  -->
      <div class="inscription">
        <h2 class="conexion_subtitle text-center inscription_sub">
           Inscription avec paiement
        </h2>
        <!-- .steps content form  -->
        <div class="steps">
          <form action="" class="inscription_frm">
            <div class="steps_child steps_first">
              <div class="steps_cont">
                <h3 class="steps_number text-center"><a href="{{route('inscriptionMembres2')}}">2</a></h3>
              </div>
              <input type="text" class="input" placeholder="Nom">
              <input type="text" class="input" placeholder="Prénom">
              <input type="email" class="input" placeholder="Email">
              <input type="tel" class="input" placeholder="Telephone">
              <input type="password" class="input" name="" placeholder="Mot de passe" id="">
              <input type="password" class="input" name="" placeholder="Confirmer votre mot de passe" id="">
              <input type="password" class="input" name="" placeholder="Paiment" id="">
              <input type="submit" value="Inscription" class="btn-inscription">
            </div>
          </form>
        </div>
      </div>
    </div>
    <span class="conexion_close"><a href="{{route('accueil')}}"><i class="fas fa-house-user"></i></a> </span>
    <div class="conexion_desc">CONEXION DESCRIPTION</div>
  </div>

@endsection

