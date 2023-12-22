<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonial;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class testimonialController extends Controller
{
    public function AjTestimonial()
    {
        return view('AjTestimonial');
    }

    public function addTestimonial(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required|unique:testimonials',
            'prenom'=>'required',
            'description' => 'required',
            'imageTestimonial'=>'required'
        ]);
        $anaranaAvecExtension = $request->file('imageTestimonial')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('imageTestimonial')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('imageTestimonial')->storeAs('public/testimonial/my_images', $anaranaFichier);

        $inscrire = new testimonial();
        $inscrire->nom = $request->input('nom');
        $inscrire->prenom = $request->input('prenom');
        $inscrire->description = $request->input('description');

        $inscrire->imageTestimonial = $anaranaFichier;
        $inscrire->save();
        Session::put('testimonil');
        return redirect('AjTestimonial')->with('tafiditra', 'Tafiditra ilay testimonial');
    }
}
