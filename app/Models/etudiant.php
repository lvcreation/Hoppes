<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague,Decolage};

use Carbon\Carbon;
class etudiant extends Model
{
    use HasFactory;
    protected $fillable = ["nom","prenom","adresse","phone","nom_du_vague","formation","duree","droit","sary","mois1","mois2","mois3","mois4","mois5","entrer","sortie","statue","created_at"];
  
    
    protected $dates = ['created_at'];

   public function droit (){
      return $this->belongsTo(droit::class);
   }
   public function datyEcolage (){
      return $this->hasOne(Decolage::class);
   }
   public function droit2 (){
      return $this->hasMany(droit::class);
   }
    

}
