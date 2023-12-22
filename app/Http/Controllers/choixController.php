<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague,Decolage};
use Carbon\Carbon;

class choixController extends Controller
{
    public function choix_formation($name) {
        $categories = formation::all();
        $etudiants =etudiant::where('statue',1)->where('formation',$name)->simplePaginate(8);
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$name)->count();
        return view('choixformation',compact('categories','etudiants','nbEtudiant'));
    }
    public function choix_formation2($name) {
        $categories = formation::all();
        $etudiant =etudiant::where('statue',1)->where('formation',$name)->simplePaginate(8);
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$name)->count();
        return view('choixformation2',compact('categories','etudiant','nbEtudiant'));
    }
    public function choix_formation3($name) {
        $categories = formation::all();
        $etudiant =etudiant::where('statue',1)->where('formation',$name)->simplePaginate(8);
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$name)->count();
        return view('choixformation3',compact('categories','etudiant','nbEtudiant'));
    }
    public function choix_inscriptionjour($name){
        $date = date('Y-m-d');
        $categories = formation::all(); 
        $etudiant = etudiant::orderBy('id','Desc')->whereDate('created_at', $date)->get(); 
        $students = etudiant::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->simplePaginate(5);
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$name)->count();
        
        return view('choixinscriptionjour',compact('categories', 'etudiant', 'nbEtudiant'))->with('i', (request()->input('page', 1)-1) *5);
    } 
    public function choix_inscription2($name){   
        $categories = formation::all();
        $nbEtudiant= etudiant::where('statue',1)->whereBetween('created_at', [Carbon::now()->startOfWeek(),     Carbon::now()->endOfWeek()])->count();
        $studentse =etudiant::where('statue',1)->whereBetween('created_at', [Carbon::now()->startOfWeek(),     Carbon::now()->endOfWeek()])->simplePaginate(5);
        return view('choixinscription2', compact('nbEtudiant', 'categories', 'studentse'))->with('i', (request()->input('page', 1)-1) *5);
    } 
    public function choix_inscription3($name){
        $categories = formation::all(); 
        $nbEtudiant= etudiant::where('statue',1)->where('formation',$name)->count();
        $studentsmois =etudiant::where('statue',1)->whereMonth('created_at', [Carbon::now()->startOfmonth(), Carbon::now()->endOfmonth()])->simplePaginate(5);
        return view('choixinscription3', compact('nbEtudiant', 'categories', 'studentsmois'))->with('i', (request()->input('page', 1)-1) *5);
    } 
}
