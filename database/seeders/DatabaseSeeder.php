<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{duree,ecolage,etudiant,formateur,formation,vague,droit,Decolage};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // etudiant::create([
        //     "nom"=>"tahina",
        //     "prenom"=>"tsiry",
        //     "adresse"=>"Anjanahary",
        //     "phone"=>"033",
        //     "vague_id"=>"7h",
        //     "formation_id"=>"devweb",
        //     "ecolage_id"=>"200000",
        //     "duree_id"=>"5mois",
        //     "sary"=>"img3.png",
        // ]);
            Decolage::create([
                'etudiant_id'=>'1',
                'Pmois1'=>'22-10-2023',
                'Pmois2'=>'22-10-2023',
                'Pmois3'=>'22-10-2023',
                'Pmois4'=>'22-10-2023',
                'Pmois5'=>'22-10-2023',
            ]);
    }
}
