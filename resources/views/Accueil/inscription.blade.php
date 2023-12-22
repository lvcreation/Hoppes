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
          Inscription
        </h2>

        <!-- .steps content form  -->
        <div class="steps">
          <form action="{{route('inscriptionMembre')}}" method="POST" class="inscription_frm" enctype="multipart/form-data">
            @csrf
            @if(Session::has('statue'))
              <div>
                {{ Session::get('statue') }}
              </div>
            @endif
            <div class="steps_child steps_first">
              <div class="steps_cont">
              </div>
              <div>
                {!! $errors->first('Role', '<span class="diso">:message</span>') !!}
                <select name="Role" id="misafidy">
                    <option value="simpleVisiteur">Simple visiteur</option>
                    <option value="etudiant">Etudiant(e)</option>
                    <option value="connexionPanier">S'inscrire & payer en ligne</option>
                </select>
              </div>
              {!! $errors->first('mois1', '<span class="diso">:message</span>') !!} 
              <label for="mois1">Ecolage</label>
              <input type="text" name="mois1"> 
              {!! $errors->first('droit', '<span class="diso">:message</span>') !!} 
              <label for="droit">Droit</label>
              <input type="text" name="droit">
              <br>

              {!! $errors->first('name', '<span class="diso">:message</span>') !!}
              <input type="text" name="name" class="input" placeholder="Nom">
              {{-- {!! $errors->first('prenom', '<span class="diso">:message</span>') !!}
              <input type="text" name="prenom" class="input" placeholder="Prénom"> --}}
              {!! $errors->first('email', '<span class="diso">:message</span>') !!}
              <input type="email" name="email" class="input" placeholder="Email">
              {!! $errors->first('telephone', '<span class="diso">:message</span>') !!}
              <input type="tel" class="input" name="telephone" placeholder="Telephone">
              {!! $errors->first('password', '<span class="diso">:message</span>') !!}
              <input type="password" class="input" name="password" placeholder="Mot de passe" id="">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <input type="password" class="input" name="password_confirmation" placeholder="Confirmer votre mot de passe" id="">
              {!! $errors->first('codeAcces', '<span class="diso">:message</span>') !!}
              <input type="password" style="display: none;"  name="codeAcces" class="input" name="" placeholder="Code d'accès" id="codeAcces">
              {!! $errors->first('filiere', '<span class="diso">:message</span>') !!}
              <select name="filiere" id="filiere">
                <option value="Call center">Call center</option>
                <option value="Dev web">Dev web</option>
                <option value="Graphic design">Graphic design</option>
              </select> <br>
              {!! $errors->first('image', '<span class="diso">:message</span>') !!}
              <input type="file" name="image" >
              <div class="form-group">
                <input type="checkbox" name="terms" value="1" required @click="checkTerms">
                <label for="terms">
                  Acceptez-vous ces termes de conditions?
                </label>
              </div>

              <button type="submit" class="btn-inscription">
                {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <span class="conexion_close"><a href="{{route('accueil')}}"><i class="fas fa-house-user"></i></a> </span>
    <div class="conexion_desc">CONEXION DESCRIPTION</div>
  </div>

  <script>
    let misafidy = document.getElementById('misafidy');
    let codeAcces = document.getElementById('codeAcces');
    let filiere=document.getElementById('filiere');
    misafidy.addEventListener('change', ()=>{
        if(misafidy.value == 'simpleVisiteur'){
            codeAcces.style = "display: none;";
            filiere.style = "display: none;";
        }
        else if(misafidy.value == 'etudiant'){
            codeAcces.style = "display: block;";
            filiere.style = "display: block;";

        }

        let paiement = this.value;
        if (misafidy.value == 'connexionPanier') {
            window.location.href = 'connexionPanier';
        } 
    });

    export default{
      data(){
        return{
          terms: false,
        }
      },
      methods:{
          register(){

          },
          checkTerms(){
            this.terms = !this.terms;
          },
        },
    }
    
  </script>
@endsection

