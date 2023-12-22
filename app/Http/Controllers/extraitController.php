<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extrait;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class extraitController extends Controller
{
    public function AjExtrait(){
        return view('AjExtrait');
    }
    public function AddExtrait(Request $request){
        $this->validate($request,[
            'Nom'=>'required|unique:extraits',
            'LienGithub'=>'required',
            'card'=>'required',
            'imageExtrait'=>'file|required'
        ]);
        $anaranaAvecExtension = $request->file('imageExtrait')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('imageExtrait')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('imageExtrait')->storeAs('public/extrait/my_images', $anaranaFichier);

        $extrait = new extrait();
        $extrait->Nom = $request->input('Nom');
        $extrait->LienGithub = $request->input('LienGithub');
        $extrait->card = $request->input('card');

        $extrait->imageExtrait = $anaranaFichier;
        $extrait->save();
        Session::put('extrait');
        return redirect('AjExtrait')->with('tafiditra', 'Tafiditra ilay extrait');
    }
}
