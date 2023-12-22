<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formateur;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class formateurController extends Controller
{
    public function AjFormateur()
    {
        return view('AjFormateur');
    }

    public function addFormateur(Request $request)
    {
        $this->validate($request,[
            'anarana'=>'required|unique:formateurs',
            'fanampiny'=>'required',
            'adiresy' => 'required',
            'num'=>'required',
            'image'=>'required'
        ]);
        $anaranaAvecExtension = $request->file('image')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('image')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('image')->storeAs('public/formateur/my_images', $anaranaFichier);

        $inscrire = new formateur();
        $inscrire->anarana = $request->input('anarana');
        $inscrire->fanampiny = $request->input('fanampiny');
        $inscrire->adiresy = $request->input('adiresy');
        $inscrire->num = $request->input('num');

        $inscrire->image = $anaranaFichier;
        $inscrire->save();
        Session::put('formateur');
        return redirect('AjFormateur')->with('tafiditra', 'Tafiditra ilay formateur');
    }
}
