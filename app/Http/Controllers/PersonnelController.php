<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague};
use Illuminate\Support\Facades\Gate;



class PersonnelController extends Controller
{
    public function AjoutPersonnel(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('AjPers');
    }
    public function AddPersonnel(Request $req){
        $this->validate($req,[
            'nomPers'=>'required|unique:formateurs,anarana',
            'prenomPers'=>'required',
            'AdressePers'=>'required',
            'numPers'=>'required',
            'saryPers'=>'image|nullable|max:1999'
        ]);
        if ($req->hasFile('saryPers')) {
            $nomAvecExtension = $req->file('saryPers')->getClientOriginalName();
            $nomFotsin = pathinfo($nomAvecExtension,PATHINFO_FILENAME);
            $nomExtension = $req->file('saryPers')->getClientOriginalExtension();   
            $nomFichier = $nomFotsin.'_'.time().'.'.$nomExtension;
            $image = $req->file('saryPers')->storeAs('public/admin/my_images',$nomFichier);
        }else{
            $nomFichier='noimage.jpg';
        }
        $pers = new formateur();
            $pers->anarana = $req->input('nomProduit');
            $pers->fanampiny = $req->input('PrixProduit');
            $pers->adiresy = $req->input('status');
            $pers->num = $req->input('Nom_categorie');
            
            $pers->image = $nomFichier;
            $pers->save();

        return redirect()->Route('AjPersonnel')->with('tafiditra','Le Personnel '. $pers->anarana .' est bien ajouter avec succèss!');

    }
    public function personnel(){
        $personnel = formateur::all();
        return view('Personnel',compact('personnel'));
    }
}
