<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague};
use Illuminate\Support\Facades\Gate;


class VagueController extends Controller
{
    public function AjoutVague(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('AjVague');
    }
    public function AddVague(Request $req){
        $this->validate($req,[
            'heureVague'=>'required|unique:vagues,Heure'        
        ]);
        $vague = new vague();
            $vague->Heure = $req->input('heureVague');
            $vague->save();

        return redirect()->Route('AjVague')->with('tafiditra','Le Vague '. $vague->Heure .' est bien ajouter avec succèss!');

    }
    public function vague(){
        $vague = vague::all();
        return view('Vague',compact('vague'));
    }
    public function vagueModification($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $vagues = vague::find($id);
        return view('VagueModif',compact('vagues'));

    } 
    public function vagueSuppr($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $vagueSuppr = vague::find($id);
        $vagueSuppr->delete();
        return redirect('vague')->with('tafiditra',' le  vague est bien supprimer avec succèss!');

    }
    public function EditVague(Request $req){
        $this->validate($req,['heureVague'=>'required']);
        $modVague = vague::find($req->input('id'));
        $modVague->Heure = $req->input('heureVague');
        $modVague->update();
        return redirect()->Route('Vague')->with('tafiditra','La Vague '. $modVague->Heure .' est bien modifier avec succèss!');
    }
}
