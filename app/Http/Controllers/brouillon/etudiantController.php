<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\{duree,ecolage,etudiant,formateur,formation,vague,droit,Decolage};
use Carbon\Carbon;

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
    public function inscriptions(){
        $categories = formation::all();
        $etudiant = etudiant::orderBy('id','Asc')->simplePaginate(8);
        $nbEtudiant= etudiant::count();
        return view('Inscription',compact('etudiant','categories','nbEtudiant'));

    }
    public function inscription(){
        $categories = formation::all();
        $etudiant = etudiant::orderBy('id','Asc')->simplePaginate(8);
        $nbEtudiant= etudiant::count();
        
        $date = date('Y-m-d'); 
        $etudiant = etudiant::whereDate('created_at', $date)->get(); // Requête pour récupérer tous les étudiants inscrits à la date donnée

       
        return view('inscriptionjour', compact('etudiant','categories','nbEtudiant'))->with('etudiant', $etudiant, 'i')->with('i', (request()->input('page', 1)-1) *5);
        
    
    }
    public function inscrsemaine(){
       
        // par semaine
        $students = etudiant::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
       
        $categories = formation::all();
        $etudiant = etudiant::orderBy('id','Asc')->simplePaginate(8);
        $nbEtudiant= etudiant::count();
        return view('inscriptionsemaine', compact( 'studiants','categories','nbEtudiant'))->with('etudiant', $students, 'i')->with('i', (request()->input('page', 1)-1) *5);
        
    
    }
    public function inscrmois(){
       
        // par semaine
        // $studentsmois = etudiant::whereMonth('created_at', Carbon::now()->month)->get();
        // $stud = etudiant::orderBy('id','Asc')->simplePaginate(5);        
        $studentsmois = etudiant::whereMonth('created_at', [Carbon::now()->startOfmonth(), Carbon::now()->endOfmonth()])->get();      
        $categories = formation::all();
        $etudiant = etudiant::orderBy('id','Asc')->simplePaginate(8);
        $nbEtudiant= etudiant::count();
        return view('inscriptionmois', compact('studentsmois','categories','nbEtudiant'))->with('etudiant', $studentsmois, 'i')->with('i', (request()->input('page', 1)-1) *5); 
        // return view('admin.categorie')->with('categorie', $categorie, 'i')->with('i', (request()->input('page', 1)-1) 
        
    
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
    public function choix_inscription($name){
        // etudiant par jour 
        $date = date('Y-m-d'); 
        $etudiant = etudiant::whereDate('created_at', $date)->get(); // Requête pour récupérer tous les étudiants inscrits à la date donnée
        // etudient par semaine

        $students = etudiant::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        // etudiant par mois
        $studentsmois = etudiant::whereMonth('created_at', [Carbon::now()->startOfmonth(), Carbon::now()->endOfmonth()])->get();   
        
       
        $etudiants = etudiant::where('statue',1)->where('created_at',$name)->simplePaginate(6);

        $nbEtudiant= etudiant::where('statue',1)->where('formation',$name)->count();
        $categories = formation::all();
        return view('inscription',compact('etudiants', 'etudiant','students','categories','studentsmois', 'nbEtudiant'));
    } 
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
