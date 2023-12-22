<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{duree,ecolage,etudiant,formateur,formation,vague,droit,user};
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;




class EcolageController extends Controller
{
    public function AjoutEcolage (){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $membre =Auth::user()->Role; 

        return view('AjEcolage' ,compact('membre'));
    }
    public function AddEcolage (Request $req){
        $this->validate($req,[
            'Ecolage1'=>'required|unique:ecolages,mois1',
            'Ecolage2'=>'required|unique:ecolages,mois2',
            'Ecolage3'=>'required|unique:ecolages,mois3',
            'Ecolage4'=>'required|unique:ecolages,mois4',
            'Ecolage5'=>'required|unique:ecolages,mois5'
        ]);
        $ecolage = new ecolage();
            $ecolage->mois1 = $req->input('Ecolage1');
            $ecolage->mois2 = $req->input('Ecolage2');
            $ecolage->mois3 = $req->input('Ecolage3');
            $ecolage->mois4 = $req->input('Ecolage4');
            $ecolage->mois5 = $req->input('Ecolage5');
            $ecolage->save();
            return redirect()->Route('AjEcolage')->with('tafiditra','une nouvelle ecolage  est bien ajouter avec succèss!');
    }
    public function ecolage(){
        $ecolage = ecolage::all();
        return view('Ecolage',compact('ecolage'));
    }
    public function ecolageModification($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $ecolages = ecolage::find($id);
        return view('EcolageModif',compact('ecolages'));

    } 
    public function ecolageSuppr($id){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $ecolageSuppr = ecolage::find($id);
        $ecolageSuppr->delete();
        return redirect('ecolage')->with('tafiditra',' l\'ecolage est bien supprimer avec succèss!');

    }
    public function EditEcolage(Request $req){
        $this->validate($req,[
            'Ecolage1'=>'required',
            'Ecolage2'=>'required',
            'Ecolage3'=>'required',
            'Ecolage4'=>'required',
            'Ecolage5'=>'required',
        ]);
        $modEcolage = ecolage::find($req->input('id'));
        $modEcolage->mois1 = $req->input('Ecolage1');
        $modEcolage->mois2 = $req->input('Ecolage2');
        $modEcolage->mois3 = $req->input('Ecolage3');
        $modEcolage->mois4 = $req->input('Ecolage4');
        $modEcolage->mois5 = $req->input('Ecolage5');
        $modEcolage->update();
        return redirect()->Route('ecolage')->with('tafiditra','l\'ecolage  est bien modifier avec succèss!');
    }
}
