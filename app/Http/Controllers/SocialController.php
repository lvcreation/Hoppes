<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth; 
use Validator;


use Exception;

class SocialController extends Controller
{
//     public function facebookpage(){
//         return Socialite::driver('facebook')->redirect();
//    }
//    public function facebookredirect(){
//         try{
//              $user = Socialite::driver('facebook')->user();
//              $existingUser = User::where('fb_id', $user->id)->first();
        
   
//              if($existingUser){
//                   Auth::login($existingUser);
//                   return redirect('home');
//              }else{
//                   $createUser = User::updateOrCreate([
//                        'name' => $user->name,
//                        'email' => $user->email,
//                        'fb_id' => $user->id,
//                   ]);
   
//                   Auth::login($createUser);
      
//                   // Rediriger l'utilisateur vers la route home
//                   return redirect()->route('home');  
//              }
//         }catch(Exception $e){
//              dd($e->getMessage());
//         }
//    }

public function facebookpage($provider){
     return Socialite::driver('facebook')->redirect();
}



public function facebookredirect($provider)
{
    try {
        // Récupérer les informations de l'utilisateur à partir du fournisseur
        $socialUser = Socialite::driver($provider)->user();

        // Vérifier si l'utilisateur existe déjà dans la base de données en utilisant l'adresse e-mail
        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'password' => Hash::make(Str::random(8)),
            ]
        );

        // Connecter l'utilisateur
        Auth::login($user);

        // Rediriger l'utilisateur vers la route home
        return redirect()->route('home');
    } catch (Throwable $e) {
        // Rediriger l'utilisateur vers la page de connexion avec l'erreur appropriée
        return redirect()->route('login')->with('error', 'Une erreur s\'est produite lors de la connexion avec le fournisseur.');
    }


}
}
