<?php

namespace App\Http\Controllers;

// use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague,Decolage,user};

class MonController extends Controller
{
    public function accueilAdmin() {
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $categories = formation::all();
        $etudiants =etudiant::where('statue', 1)->orderBy('id','Desc')->simplePaginate(8);
        $nbEtudiant= etudiant::where('statue',1)->count();
        $membre =Auth::user()->Role; 
        Session::put('membre',$membre);      
        return view('welcome',compact('categories','etudiants','nbEtudiant', 'membre'));
    }

    public function search(Request $req){
        $this->validate($req,['query'=>'required']);
        $categories = formation::all();
        
        $etudiants = etudiant::where('nom','Like','%'.$req->input('query').'%')
        ->orWhere('prenom','Like','%'.$req->input('query').'%')
        ->orWhere('adresse','Like','%'.$req->input('query').'%')
        ->orWhere('phone','Like','%'.$req->input('query').'%')
        ->orWhere('nom_du_vague','Like','%'.$req->input('query').'%')
        ->orWhere('formation','Like','%'.$req->input('query').'%')
        ->orWhere('duree','Like','%'.$req->input('query').'%')
        ->orWhere('droit','Like','%'.$req->input('query').'%')
        ->orWhere('entrer','Like','%'.$req->input('query').'%')
        ->orWhere('sortie','Like','%'.$req->input('query').'%')
        ->orWhere('sary','Like','%'.$req->input('query').'%')
        ->get();
        Session::put('search','Resultat de votre recherche '.$req->input('query'));
        return view('search',compact('etudiants','categories'));
    }
    public function searchAdvanced(Request $req){
        $this->validate($req,['formation'=>'required','vague'=>'required']);
        $etudiants = etudiant::where('statue', 1)
        ->where('formation','Like','%'.$req->input('formation').'%')
        ->where('nom_du_vague','Like','%'.$req->input('vague').'%')
       
        ->get();
        Session::put('search','Resultat de votre recherche '.$req->input('formation').': ');
        return view('searchAdvanced',compact('etudiants'));
    }
    public function searchAdvanced2(Request $req){
        $this->validate($req,['formation'=>'required','vague'=>'required','mois'=>'required']);
        $ecolages =ecolage::all();
        $etudiants = etudiant::where('statue', 1)
        ->where('formation','Like','%'.$req->input('formation').'%')
        ->where($req->input('mois'),'Like',$req->input('vague'))
        // ->where('mois5','Like','%'.$req->input('vague').'%')
       
        ->get();
        $etudiantsIsa = etudiant::where('formation','Like','%'.$req->input('formation').'%')
        ->where($req->input('mois'),'Like','%'.$req->input('vague').'%')->count();
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$req->input('formation'))->count();
        Session::put('search','Resultat de votre recherche '.$req->input('formation').': ');
        return view('searchAdvanced2',compact('etudiants','ecolages','etudiantsIsa','nbEtudiant'));
    }
    public function searchAdvanced3(Request $req){
        $this->validate($req,['formation'=>'required','vague'=>'required','ecolage'=>'required','mois'=>'required']);
        $etudiants = etudiant::where('statue', 1)
        ->where('formation','Like','%'.$req->input('formation').'%')
        ->where('nom_du_vague','Like','%'.$req->input('vague').'%')
        ->where($req->input('mois'),'Like',$req->input('ecolage'))
       
        ->simplePaginate(8);
        $etudiantsIsa = etudiant::where('statue', 1)
        ->where('formation','Like','%'.$req->input('formation').'%')
        ->where('nom_du_vague','Like','%'.$req->input('vague').'%')
        ->where($req->input('mois'),'Like',$req->input('ecolage'))
        ->count();
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$req->input('formation'))
        ->where('nom_du_vague','Like','%'.$req->input('vague').'%')->count();
        Session::put('search','Resultat de votre recherche '.$req->input('formation').': ');
        return view('searchAdvanced3',compact('etudiants','etudiantsIsa','nbEtudiant'));
    }
    public function rechercheAvance(){
        $etudiants = etudiant::all();
        $vagues = vague::all();
        $categories = formation::all();
        $ecolages = ecolage::all();
        return view('rechercheAvance',compact('etudiants','categories','vagues','ecolages'));
    }
    public function rechercheAvance2(){
        $etudiants = etudiant::all();
        $vagues = vague::all();
        $categories = formation::all();
        $ecolages = ecolage::all();
        return view('rechercheAvance2',compact('etudiants','categories','vagues','ecolages'));
    }
    public function rechercheAvance3(){
        // $etudiants = etudiant::all();
        $categories = formation::all();
        $vagues = vague::all();
        $ecolages = ecolage::all();
        return view('rechercheAvance3',compact('vagues','categories','ecolages'));
    }
    public function detailEtudiant($id){
        $detailEtudiant = etudiant::find($id);
        $ecolageDetail = Decolage::where('etudiant_id',$id)->first();
    //     dd($detailEtudiant);
        return view('detailEtudiants',compact('detailEtudiant','ecolageDetail'));
    }
    public function paiement_ecolage($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $ecolazy = ecolage::all();
        $taloha = etudiant::find($id);
        $sarany =DB::table('decolages')->where('etudiant_id',$id)->first();
        return view('ModifePaiement',compact('ecolazy','taloha','sarany'));
    }
    
    public function EcolageDetail($id){
        $detailEcolage = DB::table('etudiants')
        ->join('decolages','etudiants.id',"=", 'decolages.etudiant_id')
        ->where('decolages.etudiant_id',$id)
        ->first();
        return view('EcolageDetail',compact('detailEcolage'));
    }
    public function EcolageAdd(Request $req){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $id = $req->input('id');

        $EtudiantAjout = etudiant::find($id);
        $EtudiantAjout->mois1 = $req->input('Pmois1');
        $EtudiantAjout->mois2 = $req->input('Pmois2');
        $EtudiantAjout->mois3 = $req->input('Pmois3');
        $EtudiantAjout->mois4 = $req->input('Pmois4');
        $EtudiantAjout->mois5 = $req->input('Pmois5');
        $EtudiantAjout->update();
     
        $EtudiantAjout2 = Decolage::where('etudiant_id', $id)->first();
        if (isset($EtudiantAjout2)) {
            $EtudiantAjout2->Pmois1 = $req->input('Dmois1');
            $EtudiantAjout2->Pmois2 = $req->input('Dmois2');
            $EtudiantAjout2->Pmois3 = $req->input('Dmois3');
            $EtudiantAjout2->Pmois4 = $req->input('Dmois4');
            $EtudiantAjout2->Pmois5 = $req->input('Dmois5');
            $EtudiantAjout2->etudiant_id = $id;
    
                $EtudiantAjout2->save();
        }else{
            $EtudiantAjout3 = new Decolage();
            $EtudiantAjout3->Pmois1 = $req->input('Dmois1');
            $EtudiantAjout3->Pmois2 = $req->input('Dmois2');
            $EtudiantAjout3->Pmois3 = $req->input('Dmois3');
            $EtudiantAjout3->Pmois4 = $req->input('Dmois4');
            $EtudiantAjout3->Pmois5 = $req->input('Dmois5');
            $EtudiantAjout3->etudiant_id = $id;
            $EtudiantAjout3->save();
        }   
        return redirect('/');
    }
    public function EtudiantAttente($id){
        $etudiantActif = etudiant::find($id);
        $etudiantActif->statue = 2;
        $etudiantActif->update();
        return redirect()->route('accueil')->with('tafiditra','l\' etudiant '.$etudiantActif->prenom.' est bien en perfectionnement avec success!');
    }
    public function EtudiantAncien($id){
        $etudiantActif = etudiant::find($id);
        $etudiantActif->statue = 3;
        $etudiantActif->update();
        return redirect()->route('accueil')->with('tafiditra','l\' etudiant '.$etudiantActif->prenom.' est bien sortie avec success!');
    }
    public function EtudiantStandby($id){
        $etudiantActif = etudiant::find($id);
        $etudiantActif->statue = 4;
        $etudiantActif->update();
        return redirect()->route('accueil')->with('tafiditra','l\' etudiant '.$etudiantActif->prenom.' est bien en standby avec success!');
    }
    public function EtudiantFamille($id){
        $etudiantActif = etudiant::find($id);
        $etudiantActif->statue = 5;
        $etudiantActif->update();
        return redirect()->route('accueil')->with('tafiditra','l\' etudiant '.$etudiantActif->prenom.' est bien une famille avec success!');
    }
    public function rechercheAvance4(){
        $etudiants = etudiant::all();
        $vagues = vague::all();
        $categories = formation::all();
        $ecolages = ecolage::all();
        return view('rechercheAvance4',compact('etudiants','categories','vagues','ecolages'));
    }
    public function searchAdvanced4(Request $req){
        $this->validate($req,['formation'=>'required','statue'=>'required']);
        $ecolages =ecolage::all();
        $etudiants = etudiant::where('formation','Like','%'.$req->input('formation').'%')
        ->where('statue','Like',$req->input('statue'))
        // ->where('mois5','Like','%'.$req->input('vague').'%')
       
        ->simplePaginate(8);
        $etudiantsIsa = etudiant::where('formation','Like','%'.$req->input('formation').'%')
        ->where('statue','Like','%'.$req->input('statue').'%')->count();
        $nbEtudiant= etudiant::where('formation',$req->input('formation'))->count();
        Session::put('search','Resultat de votre recherche '.$req->input('formation').': ');
        return view('searchAdvanced4',compact('etudiants','ecolages','etudiantsIsa','nbEtudiant'));
    }
}
