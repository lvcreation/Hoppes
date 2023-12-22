<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\{duree,ecolage,formateur,formation,vague,droit,Decolage};
use App\Models\etudiant;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    public function AjoutEtudiant(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $vague = vague::all();
        $formation = formation::all();
        $duree = duree::all();
        $droit = droit::get();
        return view('AjEtudiant',compact('vague','formation','duree','droit'));
    }
    public function AddEtudiant(Request $req){
        $this->validate($req,[
            'nom'=>'required|unique:etudiants,nom',
            'prenom'=>'required',
            'adresse'=>'required',
            'phone'=>'required',
            'Ephone'=>'required',
            'Vague'=>'required',
            'formation'=>'required',
            'duree'=>'required',
            'droit'=>'required',
            'Entrer'=>'required',
            'Sortie'=>'required',
            'saryEtudiant'=>'image|nullable|max:1999'
        ]);
        if ($req->hasFile('saryEtudiant')) {
            $nomAvecExtension = $req->file('saryEtudiant')->getClientOriginalName();
            $nomFotsin = pathinfo($nomAvecExtension,PATHINFO_FILENAME);
            $nomExtension = $req->file('saryEtudiant')->getClientOriginalExtension();   
            $nomFichier = $nomFotsin.'_'.time().'.'.$nomExtension;
            $image = $req->file('saryEtudiant')->storeAs('public/admin/my_images',$nomFichier);
            
        }else{
            $nomFichier=asset('admin/images/noimage.jpg');
        }
        $etudiant = new etudiant();
            $etudiant->nom = $req->input('nom');
            $etudiant->prenom = $req->input('prenom');
            $etudiant->adresse = $req->input('adresse');
            $etudiant->phone = $req->input('phone');
            $etudiant->Ephone = $req->input('Ephone');
            $etudiant->nom_du_vague = $req->input('Vague');
            $etudiant->formation = $req->input('formation');
            $etudiant->duree = $req->input('duree');
            $etudiant->entrer = $req->input('Entrer');
            $etudiant->sortie = $req->input('Sortie');
            $etudiant->droit = $req->input('droit');
            $etudiant->statue = 1;
            $etudiant->sary = $nomFichier;
            
            $etudiant->save();
        return redirect()->Route('AjEtudiant')->with('tafiditra',"L' Etudiant ". $etudiant->prenom .' est bien ajouter avec succèss!');

    }
    public function etudiant(){
        $categories = formation::all();
        $etudiant = etudiant::orderBy('id','Asc')->simplePaginate(8);
        $nbEtudiant= etudiant::count();
        return view('Etudiant',compact('etudiant','categories','nbEtudiant'));

    }
  
    public function inscription(){
        $date = date('Y-m-d'); 
        $etudiantJour = etudiant::orderBy('id','Desc')->whereDate('created_at', $date)->simplePaginate(5); // Requête pour récupérer tous les étudiants 
        $categories = formation::all();       
        $nbEtudiant= etudiant::whereDate('created_at', $date)->count();
        return view('inscriptions', compact('etudiantJour','categories','nbEtudiant'))->with('etudiant', $etudiantJour, 'i')->with('i', (request()->input('page', 1)-1) *5);
    }
    public function inscrsemaine(){
        // if(!Gate::allows('access-admin')){
        //     abort('403');
        // }
        // par semaine
        $categories = formation::all();                 
        $nbEtudiant= etudiant::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $students = etudiant::orderBy('id','Desc')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->simplePaginate(5);  

        return view('inscriptionsemaine', compact( 'students','categories','nbEtudiant'))->with('etudiant', $students, 'i')->with('i', (request()->input('page', 1)-1) *5);
    }
    public function inscrmois(){
        // if(!Gate::allows('access-admin')){
        //     abort('403');
        // }
        $categories = formation::all();       
        $nbEtudiant= etudiant::whereMonth('created_at', [Carbon::now()->startOfmonth(), Carbon::now()->endOfmonth()])->count();
        $studentsmois = etudiant::orderBy('id','Desc')->whereMonth('created_at', [Carbon::now()->startOfmonth(), Carbon::now()->endOfmonth()])->simplePaginate(5);      
        
        return view('inscriptionmois', compact('studentsmois','categories','nbEtudiant'))->with('etudiant', $studentsmois, 'i')->with('i', (request()->input('page', 1)-1) *5); 
    }

    public function Inscriptions()
    {
        $categories = formation::all();       
        $nbEtudiant= etudiant::all()->count();
        $Tetudiant = etudiant::orderBy('id','Desc')->simplePaginate(5);
        return view('totalInscrire', compact('categories', 'nbEtudiant', 'Tetudiant'))->with('i', (request()->input('page', 1)-1) *5);
    }

    public function GestionEcolage($id){
        $detailEcolage = DB::table('etudiants')
        ->join('decolages','etudiants.id',"=", 'decolages.etudiant_id')
        ->where('decolages.etudiant_id',$id)
        ->first();
        return view('gestionEcolage',compact('detailEcolage'));
    }

    public function etudiantModification($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $etudiants = etudiant::find($id);
        return view('EtudiantModif',compact('etudiants'));

    }

    // 


    // 

    public function etudiantSuppr($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $etudiantSuppr = etudiant::find($id);
        $etudiantSuppr->delete();
        return redirect('Etudiant')->with('tafiditra',' l\' etudiant est bien supprimer avec succèss!');

    }
    public function EditEtudiant(Request $req){
        $this->validate($req,[
            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'phone'=>'required',
            'Ephone'=>'required',
            'Vague'=>'required',
            'formation'=>'required',
            'duree'=>'required',
            'droit'=>'required',
            'Entrer'=>'required',
            'Sortie'=>'required',
            'statue'=>'required',
            'saryEtudiant'=>'image|nullable|max:1999'
        ]);
        $modEtudiant = etudiant::find($req->input('id'));
        $modEtudiant->nom = $req->input('nom');
        $modEtudiant->prenom = $req->input('prenom');
        $modEtudiant->adresse = $req->input('adresse');
        $modEtudiant->phone = $req->input('phone');
        $modEtudiant->Ephone = $req->input('Ephone');
        $modEtudiant->nom_du_vague = $req->input('Vague');
        $modEtudiant->formation = $req->input('formation');
        $modEtudiant->duree = $req->input('duree');
        $modEtudiant->droit = $req->input('droit');
        $modEtudiant->entrer = $req->input('Entrer');
        $modEtudiant->sortie = $req->input('Sortie');
        $modEtudiant->statue = $req->input('statue');

        if ( empty($req->input('saryEtudiant')) ) {
            $nomFichier = $req->input('sary');
        }
        else {
            $nomFichier = $req->input('saryEtudiant');
        }
        $modEtudiant->sary = $nomFichier;
        $modEtudiant->update();
        return redirect()->Route('etudiant')->with('tafiditra','La formation '. $modEtudiant->prenom .' est bien modifier avec succèss!');
    }
}
