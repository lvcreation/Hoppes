<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{EtudiantController,VagueController,FormationController,PersonnelController,DureeController,EcolageController,DroitController,MonController,choixController, membreController,formateurController, accueilController, testimonialController,evenementController,extraitController,chatController, SocialController,SocialLoginController,AdminController,ChartController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[accueilController::class,'accueil'] )->name('accueil');
// Route::resource('chat', [chatController::class,'chat'])->name('chat');

Route::resource('chat',chatController::class);
// Route::post('store',[chatController::class,'store'] )->name('store');



Route::get('contact',[accueilController::class,'contact'] )->name('contact');
// Route::get('/',[MonController::class,'accueil'] )->name('accueil');
Route::get('AccueilAdmin',[MonController::class,'AccueilAdmin'] )->middleware('auth')->name('AccueilAdmin');
// Route::get('AccueilAdmin',[MonController::class,'AccueilAdmin'] )->name('AccueilAdmin');
Route::get('chart',[AdminController::class,'chart'] )->name('chart');
Route::get('chartDonut',[ChartController::class,'chartDonut'] )->name('chartDonut');

Route::post('search',[MonController::class,'search'] )->name('search');
Route::get('detailEtudiants/{id}',[MonController::class,'detailEtudiant'] )->name('detailE');
Route::get('paiement_ecolage/{id}',[MonController::class,'paiement_ecolage'])->name('modifeEcolage');
Route::post('EcolageAdd', [MonController::class,'EcolageAdd'])->name('EcolageAdd');
Route::get('EcolageDetail/{id}', [MonController::class,'EcolageDetail'])->name('EcolageDetail');
Route::get('GecolageD', [MonController::class,'GecolageD'])->name('GecolageD');
Route::get('GecolageDetail/{id}', [MonController::class,'GecolageDetail'])->name('GecolageDetail');


//route recherche
Route::get('choix_formation/{name}',[choixController::class,'choix_formation'] );
Route::get('choix_formation2/{name}',[choixController::class,'choix_formation2'] );
Route::get('choix_formation3/{name}',[choixController::class,'choix_formation3'] );
Route::get('hoix_inscription/{name}',[choixController::class,'hoix_inscription'] );
Route::get('choix_inscriptionjour/{name}',[choixController::class,'choix_inscriptionjour']);
Route::get('choix_inscription2/{name}',[choixController::class,'choix_inscription2']);
Route::get('tet/{name}',[choixController::class,'tet']);
Route::get('choix_inscription3/{name}',[choixController::class,'choix_inscription3']);

 
Route::get('rechercheAvance',[MonController::class,'rechercheAvance'] )->middleware('auth')->name('rechercheAvance');
Route::post('searchAdvanced', [MonController::class,'searchAdvanced'])->middleware('auth')->name('searchAdvanced');
Route::get('rechercheAvance2',[MonController::class,'rechercheAvance2'] )->middleware('auth')->name('rechercheAvance2');
Route::post('searchAdvanced2', [MonController::class,'searchAdvanced2'])->middleware('auth')->name('searchAdvanced2');
Route::get('rechercheAvance3',[MonController::class,'rechercheAvance3'] )->middleware('auth')->name('rechercheAvance3');
Route::post('searchAdvanced3', [MonController::class,'searchAdvanced3'])->middleware('auth')->name('searchAdvanced3');
Route::get('rechercheAvance4',[MonController::class,'rechercheAvance4'] )->middleware('auth')->name('rechercheAvance4');
Route::post('searchAdvanced4', [MonController::class,'searchAdvanced4'])->middleware('auth')->name('searchAdvanced4');



// route d'ajout
Route::get('AjoutEtudiant', [EtudiantController::class,'AjoutEtudiant'])->name('AjEtudiant');
Route::get('AjoutVague', [VagueController::class,'AjoutVague'])->name('AjVague');
Route::get('AjoutFormation', [FormationController::class,'AjoutFormation'])->name('AjFormation');
Route::get('AjoutPersonnel', [PersonnelController::class,'AjoutPersonnel'])->name('AjPersonnel');
Route::get('AjoutDuree', [DureeController::class,'AjoutDuree'])->name('AjDuree');


Route::get('AjoutEcolage', [EcolageController::class,'AjoutEcolage'])->name('AjEcolage');
Route::get('AjoutDroit', [DroitController::class,'AjoutDroit'])->name('AjDroit');
// route ajout formulaire
Route::post('AddPersonnel', [PersonnelController::class,'AddPersonnel'])->name('AddPersonnel');
Route::post('AddFormation', [FormationController::class,'AddFormation'])->name('AddFormation');
Route::post('AddVague', [VagueController::class,'AddVague'])->name('AddVague');
Route::post('AddEtudiant', [EtudiantController::class,'AddEtudiant'])->name('AddEtudiant');
Route::post('AddDuree', [DureeController::class,'AddDuree'])->name('AddDuree');
Route::post('AddEcolage', [EcolageController::class,'AddEcolage'])->name('AddEcolage');
Route::post('AddDroit', [DroitController::class,'AddDroit'])->name('AddDroit');
// affichage element

Route::get('droit', [DroitController::class,'droit'])->name('droit');
Route::get('ecolage', [EcolageController::class,'ecolage'])->name('ecolage');
Route::get('duree', [DureeController::class,'duree'])->name('duree');
Route::get('formation', [FormationController::class,'formation'])->name('Formation');
Route::get('vague', [VagueController::class,'vague'])->name('Vague');
Route::get('Personnel', [PersonnelController::class,'Personnel'])->name('Personnel');
Route::get('Etudiant', [EtudiantController::class,'etudiant'])->name('etudiant');
Route::get('inscription', [EtudiantController::class,'inscription'])->name('inscription');
Route::get('Inscriptions', [EtudiantController::class,'Inscriptions'])->name('Inscriptions');

Route::get('inscrsemaine', [EtudiantController::class,'inscrsemaine'])->name('inscrsemaine');
Route::get('inscrmois', [EtudiantController::class,'inscrmois'])->name('inscrmois');

 

//modification element
Route::get('droitModification/{id}', [DroitController::class,'droitModification'])->name('droitModification');
Route::get('droitSuppr/{id}', [DroitController::class,'droitSuppr'])->name('droitSuppr');
Route::post('EditDroit', [DroitController::class,'EditDroit'])->name('EditDroit');
Route::get('dureeModification/{id}', [DureeController::class,'dureeModification'])->name('dureeModification');
Route::get('dureeSuppr/{id}', [DureeController::class,'dureeSuppr'])->name('dureeSuppr');
Route::post('EditDuree', [DureeController::class,'EditDuree'])->name('EditDuree');
Route::get('ecolageModification/{id}', [EcolageController::class,'ecolageModification'])->name('ecolageModification');
Route::get('ecolageSuppr/{id}', [EcolageController::class,'ecolageSuppr'])->name('ecolageSuppr');
Route::post('EditEcolage', [EcolageController::class,'EditEcolage'])->name('EditEcolage');
Route::get('formationModification/{id}', [FormationController::class,'formationModification'])->name('formationModification');
Route::get('formationSuppr/{id}', [FormationController::class,'formationSuppr'])->name('formationSuppr');
Route::post('EditFormation', [FormationController::class,'EditFormation'])->name('EditFormation');
Route::get('vagueModification/{id}', [VagueController::class,'vagueModification'])->name('vagueModification');
Route::get('vagueSuppr/{id}', [VagueController::class,'vagueSuppr'])->name('vagueSuppr');
Route::post('EditVague', [VagueController::class,'EditVague'])->name('EditVague');
Route::get('etudiantModification/{id}', [EtudiantController::class,'etudiantModification'])->name('etudiantModification');
Route::get('etudiantSuppr/{id}', [EtudiantController::class,'etudiantSuppr'])->name('etudiantSuppr');
Route::post('EditEtudiant', [EtudiantController::class,'EditEtudiant'])->name('EditEtudiant');
Route::get('EtudiantAttente/{id}',[MonController::class,'EtudiantAttente'])->name('EtudiantAttente');
Route::get('EtudiantAncien/{id}',[MonController::class,'EtudiantAncien'])->name('EtudiantAncien');
Route::get('EtudiantStandby/{id}',[MonController::class,'EtudiantStandby'])->name('EtudiantStandby');
Route::get('EtudiantFamille/{id}',[MonController::class,'EtudiantFamille'])->name('EtudiantFamille');

// route membre controller
// Route::get('inscriptionMembreAff',[MonController::class,'inscriptionMembreAff'])->name('inscriptionMembreAff');
Route::post('inscriptionMembre',[membreController::class,'inscriptionMembre'])->name('inscriptionMembre');
Route::get('inscriptionMembres',[membreController::class,'inscriptionMembres'])->name('inscriptionMembres');
Route::get('inscriptionMembres2',[membreController::class,'inscriptionMembres2'])->name('inscriptionMembres2');
Route::get('inscriptionAvecPayement',[membreController::class,'inscriptionAvecPayement'])->name('inscriptionAvecPayement');




Route::get('connexionMembres',[membreController::class,'connexionMembres'])->name('connexionMembres');
Route::post('connexionMembre',[membreController::class,'connexionMembre'])->name('connexionMembre');

Route::get('connexionPanier',[membreController::class,'connexionPanier'])->name('connexionPanier');
Route::get('finance',[membreController::class,'finance'])->name('finance');
Route::post('financeMembre',[membreController::class,'financeMembre'])->name('financeMembre');




Route::get('deconexion',[membreController::class,'deconexion'])->name('deconexion');

// route formateur
Route::get('AjFormateur',[formateurController::class,'AjFormateur'])->name('AjFormateur');
Route::post('addFormateur',[formateurController::class,'addFormateur'])->name('addFormateur');

// route testimonial
Route::get('AjTestimonial',[testimonialController::class,'AjTestimonial'])->name('AjTestimonial');
Route::post('addTestimonial',[testimonialController::class,'addTestimonial'])->name('addTestimonial');

// route evenement
Route::get('AjEvenement',[evenementController::class,'AjEvenement'])->name('AjEvenement');
Route::post('AddEvenement',[evenementController::class,'AddEvenement'])->name('AddEvenement');

// route extrait
Route::get('AjExtrait',[extraitController::class,'AjExtrait'])->name('AjExtrait');
Route::post('AddExtrait',[extraitController::class,'AddExtrait'])->name('AddExtrait');

// connexion google
Route::get('auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])
    ->name('auth.socilaite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])
    ->name('auth.socilaite.callback');

// facebook
Route::get('auth/{provider}/redirect', [SocialController::class, 'facebookpage'])
    ->name('auth/facebook');
Route::get('auth/{provider}/callback', [SocialController::class, 'facebookredirect'])
    ->name('auth/facebook/callbac');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
