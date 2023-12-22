<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague,Decolage,testimonial,evenement, extrait};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class accueilController extends Controller
{
    public function accueil() {
        
        $formateur = formateur::all();
        $testimonial = testimonial::all();
        $evenement= evenement::all();
        $extrait = extrait::all();
        return view('Accueil.index', compact('formateur', 'testimonial', 'evenement','extrait'));
    }

    public function contact(request $request){
        $request->validate([
            'nom'=>'required',
            'sujet'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
        if($this->isOnline()){
           $email_data = [
            'recipient' => 'andriambahoakaadesianicomed@gmail.com',
            'fromEmail' => $request->email, 
            'fromName' => $request->nom,
            'subject' => $request->sujet,
            'body' => $request -> message
           ];

           \Mail::send('email-template', $email_data, function($message) use ($email_data){
                $message->to($email_data['recipient'])
                        ->from($email_data['fromEmail'], $email_data['fromName'])
                        ->subject($email_data['subject']);

           });
           return redirect()->back()->with('succes', 'email bien envoyer!');
        }else{
            return redirect()->back->withInput()->with('error', 'veuillez activez votre connexion sbvp!!');
        }
    }
    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
