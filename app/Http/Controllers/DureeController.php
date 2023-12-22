<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{duree,ecolage,etudiant,formateur,formation,vague,droit};
use Illuminate\Support\Facades\Gate;

class DureeController extends Controller
{
    public function AjoutDuree(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('AjDuree');
    }
    public function AddDuree(Request $req){
        $this->validate($req,[
            'DureeForm'=>'required|unique:durees,mois'
        ]);
        $dure = new duree();
            $dure->mois = $req->input('DureeForm');
            $dure->save();
            return redirect()->Route('AjDuree')->with('tafiditra',"La durée ". $dure->mois .' est bien ajouter avec succèss!');
    }
    public function duree(){
        $durer = duree::all();
        return view('Duree',compact('durer'));
    }
    public function dureeModification($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $durees = duree::find($id);
        return view('DureeModif',compact('durees'));

    } 
    public function dureeSuppr($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $dureeSuppr = duree::find($id);
        $dureeSuppr->delete();
        return redirect('duree')->with('tafiditra',' la  duree est bien supprimer avec succèss!');

    }
    public function EditDuree(Request $req){
        $this->validate($req,['Duree'=>'required']);
        $modDuree = duree::find($req->input('id'));
        $modDuree->mois = $req->input('Duree');
        $modDuree->update();
        return redirect()->Route('duree')->with('tafiditra','La duree '. $modDuree->mois .' est bien modifier avec succèss!');
    }
}
