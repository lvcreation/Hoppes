<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague};


class FormationController extends Controller
{
    public function AjoutFormation(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('AjFormation');
    }
    public function AddFormation(Request $req){
        $this->validate($req,[
            'nomFormation'=>'required|unique:formations,nom'        
        ]);
        $formation = new formation();
            $formation->nom = $req->input('nomFormation');
            $formation->save();

        return redirect()->Route('AjFormation')->with('tafiditra','Le Formation '. $formation->nom .' est bien ajouter avec succèss!');

    }
    public function formation(){
        $formation = formation::all();
        return view('Formation',compact('formation'));
    }

    public function formationModification($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $formations = formation::find($id);
        return view('FormationModif',compact('formations'));

    } 
    public function formationSuppr($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $formationSuppr = formation::find($id);
        $formationSuppr->delete();
        return redirect('formation')->with('tafiditra',' la  formation est bien supprimer avec succèss!');

    }
    public function EditFormation(Request $req){
        $this->validate($req,['nomFormation'=>'required']);
        $modFormation = formation::find($req->input('id'));
        $modFormation->nom = $req->input('nomFormation');
        $modFormation->update();
        return redirect()->Route('Formation')->with('tafiditra','La formation '. $modFormation->nom .' est bien modifier avec succèss!');
    }
}
