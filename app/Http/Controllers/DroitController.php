<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{duree,ecolage,etudiant,formateur,formation,vague,droit};
use Illuminate\Support\Facades\Gate;



class DroitController extends Controller
{
    public function AjoutDroit(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('AjDroit');
    }
    public function AddDroit(Request $req){
        $this->validate($req,[
            'Droit'=>'required|unique:droits,droit'
        ]);
        $droit = new droit();
            $droit->droit = $req->input('Droit');
            $droit->save();
            return redirect()->Route('AjDroit')->with('tafiditra',' une droit est bien ajouter avec succèss!');
    }
    public function droit(){
        $droitEntree = droit::all();
        return view('Droit',compact('droitEntree'));
    }
    public function droitModification($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $droits = droit::find($id);
        return view('DroitModif',compact('droits'));

    } 
    public function droitSuppr($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $droitSuppr = droit::find($id);
        $droitSuppr->delete();
        return redirect('droit')->with('tafiditra',' le  droit est bien supprimer avec succèss!');

    }
    public function EditDroit(Request $req){
        $this->validate($req,['Droit'=>'required']);
        $modDroit = droit::find($req->input('id'));
        $modDroit->droit = $req->input('Droit');
        $modDroit->update();
        return redirect()->Route('droit')->with('tafiditra','Le droit '. $modDroit->droit .' est bien modifier avec succèss!');
    }
}
