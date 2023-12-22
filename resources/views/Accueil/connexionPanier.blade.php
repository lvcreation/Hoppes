@extends('Accueil.layoutsAccueil.masterConnexion')
@section('titre-acceueil')
    Connexion panier
@endsection
@section('contenuConnexion')
<section class="payement-form">
    <img src="{{asset('clientSHop/images/1.jpg')}}" alt="" class="bk-payement">
    <div class="cartes">
        <input type="checkbox" name="" id="chk" aria-hidden="true">
        <div class="content">
            <div class="front">
                <div class="inner">
                    <form action="{{route('financeMembre')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @if(Session::has('statue'))
                                <div>
                                    {{ Session::get('statue') }}
                                </div>
                            @endif
                        <h1>Payement</h1>
                        {{-- {!! $errors->first('droit', '<span class="diso">:message</span>') !!}
                        <label for="">Droit</label>
                        <input type="checkbox" name="droit" id="" class="check_Paiement">
                        <label for="droit">20 000 ar</label> --}}
                    
                        {{-- {!! $errors->first('mois1', '<span class="diso">:message</span>') !!} 
                        <label for="">Ecolage:</label> <br>
                        <label for=""> Mois 1</label>
                        {!! $errors->first('mois2', '<span class="diso">:message</span>') !!} 
                        <input type="checkbox" name="mois2" id="" class="check_Paiement">
                        <label for=""> Mois 2</label>
                        {!! $errors->first('mois3', '<span class="diso">:message</span>') !!} 
                        <input type="checkbox" name="mois3" id="" class="check_Paiement">
                        <label for=""> Mois 3</label>
                        {!! $errors->first('mois4', '<span class="diso">:message</span>') !!} 
                        <input type="checkbox" name="mois4" id="" class="check_Paiement">
                        <label for=""> Mois 4</label>
                        {!! $errors->first('mois5', '<span class="diso">:message</span>') !!} 
                        <input type="checkbox" name="mois5" id="" class="check_Paiement">
                        <label for=""> Mois 5</label>
                        <input type="checkbox" name="mois5" id="" class="check_Paiement"> --}}

                        {!! $errors->first('droit', '<span class="diso">:message</span>') !!} 
                        <label for="droit">Droit</label>
                        <input type="text" name="droit">
                        <br>
                        {!! $errors->first('mois1', '<span class="diso">:message</span>') !!} 
                        <label for="mois1">Ecolage 1</label>
                        <input type="text" name="mois1">
                        <br> 
                        {!! $errors->first('mois2', '<span class="diso">:message</span>') !!} 
                        <label for=""> Ecolage 2</label>
                        <input type="text" name="mois2" id="" class="check_Paiement">
                        {!! $errors->first('mois3', '<span class="diso">:message</span>') !!} 
                        <label for=""> Ecolage 3</label>
                        <input type="text" name="mois3" id="" class="check_Paiement">
                        <br>
                        {!! $errors->first('mois4', '<span class="diso">:message</span>') !!} 
                        <label for=""> Ecolage 4</label>
                        <input type="text" name="mois4" id="" class="check_Paiement">
                        <br>
                        {!! $errors->first('mois5', '<span class="diso">:message</span>') !!} 
                        <label for=""> Ecolage 5</label>
                        <input type="text" name="mois5" id="" class="check_Paiement">
                        <br>
                        <br>

                        {{-- {!! $errors->first('name', '<span class="diso">:message</span>') !!} 
                        <label for="nom" class="information">Nom</label>
                        <input type="text" name="name" class="input_payement">
                        {!! $errors->first('email', '<span class="diso">:message</span>') !!} 
                        <label for="email" class="information">Email</label>
                        <input type="email" name="email" class="input_payement">
                        {!! $errors->first('telephone', '<span class="diso">:message</span>') !!} 
                        <label for="telephone" class="information">Telephone</label>
                        <input type="number" name="telephone" class="input_payement">
                        <label for="chk" aria-hidden="true" class="Etape">Etape suivante</label>
                        {!! $errors->first('image', '<span class="diso">:message</span>') !!}
                        <input type="file" name="image" > --}}
                        <button type="submit">Payer</button>
                        {{-- @foreach ($sommesParLigne as $somme) --}}

                            {{-- <h3>total : {{ $totals }} </h3> --}}
                            {{-- <p>Somme total des lignes: {{ $somme }}</p> --}}
                            {{-- <p>Somme des écolages : {{ $sommeEcolages }}</p> --}}

                        {{-- @endforeach --}}
                        <p>Somme par collone D:{{$sommeDroits}}</p>
                        <p>Somme par collone E:{{$sommeEcolages}}</p>
                        <p>total: {{$totalBe}}</p>
                        {{-- <p>Besoin: {{ $total2 }}</p> --}}
                        <p>resultat final: {{$resultatFinal}}</p>

                        
                        <p></p>
                    </form>
                </div>
            </div>
            {{-- <div class="back">
                <div class="inner">
                    <h1>Carte</h1>
                    <label for="nomcarte" class="information">Nom de la carte</label>
                    <input type="text" class="input_payement"> 
                    <label for="numero" class="information">numero de la carte</label>
                    <input type="text" class="input_payement">
                    <label for="mois" class="information">Mois d'expiration</label>
                    <input type="text" class="input_payement">
                    <label for="année" class="information">Année d'expiration</label>
                    <input type="text" class="input_payement">
                    <label for="cvc" class="information">CVC</label>
                    <input type="email" class="input_payement">
                    <label for="chk" aria-hidden="true" class="Etape">Menu precedent</label>  
                    <input type="submit" value="Payer" class="input-payer">
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection