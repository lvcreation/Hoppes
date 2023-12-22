<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague,Decolage,testimonial,evenement, extrait,User, finance};
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class membreController extends Controller
{
    public function inscriptionMembre(Request $request)
    {   
        $this->validate($request,[
            'name'=>'required',
            'email' => 'email|required|unique:users',
            'telephone'=>'required|min:10',
            'password'=>'required|min:8|confirmed',
            'Role'=>'required',
            'codeAcces'=>'nullable',
            'filiere'=>'nullable',
            'droit'=>'nullable',
            'mois1'=>'nullable',
            'mois2'=>'nullable',
            'mois3'=>'nullable',
            'mois4'=>'nullable',
            'mois5'=>'nullable',
            'image'=>'file|required'
        ]);
        $anaranaAvecExtension = $request->file('image')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('image')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('image')->storeAs('public/membre/my_images', $anaranaFichier);

        $inscrire = new User();
        $inscrire->name = $request->input('name');
        $inscrire->email = $request->input('email');
        $inscrire->password = bcrypt($request->input('password'));
        $inscrire->telephone = $request->input('telephone');
        $inscrire->codeAcces = $request->input('codeAcces');
        $inscrire->filiere = $request->input('filiere');
        $inscrire->droit = $request->input('droit');
        $inscrire->mois1 = $request->input('mois1');
        $inscrire->mois2 = $request->input('mois2');
        $inscrire->mois3 = $request->input('mois3');
        $inscrire->mois4 = $request->input('mois4');
        $inscrire->mois5 = $request->input('mois5');
        $inscrire->Role = $request->input('Role');

        $inscrire->image = $anaranaFichier;
        $inscrire->save();

        $client = user::where('email', $request->input('email'))->first();
        if($client){
            if(Hash::check($request->input('password'), $client->password)){
                Session::put('client',$client);
                return redirect()->route('accueil');
            }
            else{
                return back()->with('erreur', 'mot de passe incorrect');
            }
        }
        else{
            // return back()->with('erreur', "votre nom est incorrect");
            return redirect()->route('accueil')->with('statue', 'Inscription terminé');
        }

        return redirect()->route('accueil')->with('statue', 'Inscription terminé');
    }

    public function connexionMembres()
    {

        return view('Accueil.connexion');
    }

    public function inscriptionMembres()
    {
        return view('Accueil.inscription');
    }

    public function inscriptionMembres2()
    {
        return view('Accueil.ReInscription');
    }

    public function inscriptionAvecPayement()
    {
        return view('Accueil.inscriptionAvecPayement');
    }

    public function connexionMembre(Request $req)
    {
        $formateur = formateur::all();
        $testimonial = testimonial::all();
        $evenement= evenement::all();
        $extrait = extrait::all();
        $membre = user::all();
        $this->validate($req,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $client = user::where('email', $req->input('email'))->first();
        if($client){
            if(Hash::check($req->input('password'), $client->password)){
                Session::put('client',$client);
                return redirect()->route('accueil', compact('formateur', 'testimonial', 'evenement','extrait', 'membre'));
            }
            else{
                return back()->with('erreur', 'mot de passe incorrect');
            }
        }
        else{
            return back()->with('erreur', "votre nom est incorrect");
        }
    }
    public function deconexion()
    {
        $formateur = formateur::all();
        $testimonial = testimonial::all();
        $evenement= evenement::all();
        $extrait = extrait::all();
        $membre = user::all();
        Session::forget('client');
        return view('Accueil.index', compact('formateur', 'testimonial', 'evenement','extrait', 'membre'));
    }

    public function connexionPanier(Request $request)
    {
        // $totals = finance::find(3);
        $resultats = DB::table('finances')
        ->select('droit', 'mois1', 'mois2', 'mois3', 'mois4', 'mois5')
        ->get();
    
        // Initialisation des sommes
        $sommesParLigne = [];
        // Boucle sur chaque résultat pour additionner les valeurs
        foreach ($resultats as $resultat) {
            $sommesParLigne[] = $resultat->droit + $resultat->mois1 + $resultat->mois2 + $resultat->mois3 + $resultat->mois4;
        }
        $donneesFinancieres = Finance::all();
        $sommeDroits = 0;
        $sommeEcolages = 0;

        // Boucle sur chaque entrée pour additionner les valeurs
        foreach ($donneesFinancieres as $donnees) {
            $sommeDroits += $donnees->droit;
            $sommeEcolages += $donnees->mois1;
            $sommeEcolages += $donnees->mois2;
            $sommeEcolages += $donnees->mois3;
            $sommeEcolages += $donnees->mois4;
        }

        $totalBe =  $sommeDroits + $sommeEcolages ;

        $total2 = $totalBe - $donnees->mois5;

        $Vola = DB::table('finances')
        ->join('total_finances', 'finances.id', '=', 'total_finances.id') // Assurez-vous d'ajuster les colonnes de jointure
        ->select(
            DB::raw('SUM(finances.droit + finances.mois1 + finances.mois2 + finances.mois3 + finances.mois4) as finances'),
            DB::raw('SUM(total_finances.total) as total_finances') // Assurez-vous de remplacer 'votre_colonne' par le nom de la colonne à soustraire
        )
        ->first();

            // Soustraire les totaux
            $totalFinance = $total2;
            $totalEcolage = $donnees->mois5;
            $resultatFinal = $totalFinance - $totalEcolage;
        
        return view('Accueil.connexionPanier',compact('sommesParLigne', 'sommeDroits', 'sommeEcolages', 'totalBe','total2', 'resultatFinal'));
    }


    public function finance()
    {
        $totals = finance::all();
        return view('finance',compact('totals'));
    }
    public function financeMembre(Request $request)
    {
        $this->validate($request,[
            'droit'=>'nullable',
            'mois1'=>'nullable',
            'mois2'=>'nullable',
            'mois3'=>'nullable',
            'mois4'=>'nullable',
            'mois5'=>'nullable',
        ]);
        $inscrire = new finance();
       
        $inscrire->droit = $request->input('droit');
        $inscrire->mois1 = $request->input('mois1');
        $inscrire->mois2 = $request->input('mois2');
        $inscrire->mois3 = $request->input('mois3');
        $inscrire->mois4 = $request->input('mois4');
        $inscrire->mois5 = $request->input('mois5');
        
        $inscrire->save();
        return redirect()->route('connexionPanier')->with('statue', 'Inscription terminé');
    }
}
