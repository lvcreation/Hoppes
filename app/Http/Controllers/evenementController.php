<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evenement;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class evenementController extends Controller
{
    public function AjEvenement(){
        return view('AjEvenement');
    }
    public function AddEvenement(Request $request){

        $this->validate($request,[
            'NomEvenement'=>'required|unique:evenements',
            'DescEvenement'=>'required',
            'ImageEvenement' => 'file|required',
            'DateEvenement'=>'required'
        ]);
        $anaranaAvecExtension = $request->file('ImageEvenement')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('ImageEvenement')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('ImageEvenement')->storeAs('public/evenement/my_images', $anaranaFichier);

        $inscrire = new evenement();
        $inscrire->NomEvenement = $request->input('NomEvenement');
        $inscrire->DescEvenement = $request->input('DescEvenement');
        $inscrire->DateEvenement = $request->input('DateEvenement');

        $inscrire->ImageEvenement = $anaranaFichier;
        $inscrire->save();
        Session::put('evenement');
        return redirect('AjEvenement')->with('tafiditra', 'Tafiditra ilay evenement');
    }
}
