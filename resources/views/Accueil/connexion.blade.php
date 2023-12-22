@extends('Accueil.layoutsAccueil.masterConnexion')
@section('titre-acceueil')
    Connexion
@endsection
@section('contenuConnexion')
<div class="conexion">
    <!-- content  -->
    <div class="conexion_content">
      <!-- form  -->
      <div class="conexion_form">
        <h1 class="conexion_test">Connexion</h1>

        <div class="conexion_title">
          <h2 class="conexion_subtitle">
            Connectez-vous à votre compte
          </h2>

          <p>Vous n'avez pas de compte ? <span class="conexion_inscript link_inscript"><a href="{{route('inscriptionMembres')}}">S'inscrire</a> </span>
          </p>
        </div>

        <div class="conexion_social">
          <a href="{{url('auth.socilaite.callback')}}" class="conexion_link conexion_google"><i class="fa-brands fa-google"></i>&nbsp;Google</a>
          <a href="{{url('auth/facebook/callbac')}}" class="conexion_link conexion_facebook"><i class="fa-brands fa-facebook"></i>&nbsp;Facebook</a>
        </div>

        <!-- conexion  -->
        <form action="{{route('connexionMembre')}}" method="POST" class="conexion_frm">
          @csrf
          <div class="conexion_first">            
            <input type="text" name="email" class="input" placeholder="Email">
            <input type="password" name="password" class="input" placeholder="Password">
            <div class="center"><a href="">Mot de passe oublier?</a></div>
            <input type="submit" value="Connexion" class="btn-inscription">
            {{-- <button type="submit" class="conexion_frm-submit">Connexion</button> --}}
          </div>
        </form>
      </div>
    </div>
    <span class="conexion_close"><a href="{{route('accueil')}}"><i class="fas fa-house-user"></i></a></span>

    <div class="conexion_desc">CONEXION DESCRIPTION</div>
  </div>

@endsection

