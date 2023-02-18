<?php

use App\Http\Controllers\AccessoireController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\InscripPartenaire;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdisController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductArticleController;
use App\Http\Controllers\ProductBebeController;
use App\Http\Controllers\ProductHygieneController;
use App\Http\Controllers\ProductOrdinateurController;
use App\Http\Controllers\ProductSanteController;
use App\Http\Controllers\ProductSoinsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewProductController;
use App\Http\Livewire\Accessoires;
use App\Http\Livewire\Accueil;
use App\Http\Livewire\AccueilAdmin;
use App\Http\Livewire\Boutique;
use App\Http\Livewire\Clients;
use App\Http\Livewire\Commandes;
use App\Http\Livewire\Contact;
use App\Http\Livewire\DetailCommande;
use App\Http\Livewire\DevenirPartenaire;
use App\Http\Livewire\Devis;
use App\Http\Livewire\Factures;
use App\Http\Livewire\Hygiene;
use App\Http\Livewire\Livraisons;
use App\Http\Livewire\MerveillesProduit;
use App\Http\Livewire\Ordinateurs;
use App\Http\Livewire\Parametres;
use App\Http\Livewire\PartenaireInscrip;
use App\Http\Livewire\ProduitAutre;
use App\Http\Livewire\ProduitBebe;
use App\Http\Livewire\ProduitHygiene;
use App\Http\Livewire\ProduitOrdinateur;
use App\Http\Livewire\ProduitSante;
use App\Http\Livewire\ProduitSoins;
use App\Http\Livewire\ProduitView;
use App\Http\Livewire\Sante;
use App\Http\Livewire\SecretProduit;
use App\Http\Livewire\Soins;
use App\Http\Livewire\SpecialBebe;
use App\Http\Livewire\Temoignage;
use App\Http\Livewire\UserRegister;
use App\Http\Livewire\Utilisateurs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//=================================================================================================
Route::get('/admin_accueil', AccueilAdmin::class)->name('admin_accueil');
// Route::get('/admin_accueil', [AdminCotroller::class, 'index'])->name('admin_accueil');
//==============================================ROUTE SUPER ADMIN================================================

Route::group([
    'middleware' => ['auth', 'auth.admin'],
    'as' => 'admin.'
], function(){

    Route::group([
        'prefix' => 'produit',
        'as' => 'produit/liste.'
     ], function(){
        //=================================================================================================
        Route::get('/liste_sante', Sante::class)->name('sante');
        Route::get('/liste_soins', Soins::class)->name('soins');
        Route::get('/liste_hygiene', Hygiene::class)->name('hygiene');
        Route::get('/liste_ordinateur', Ordinateurs::class)->name('ordinateur');
        Route::get('/liste_bebe', SpecialBebe::class)->name('bebe');
        Route::get('/liste_accessoire', Accessoires::class)->name('accessoire');
     });
    Route::group([
        'prefix' => 'vente',
        'as' => 'vente.'
    ], function(){
        //=================================================================================================
        Route::get('/devis', Devis::class)->name('devis');
        Route::get('/commande', Commandes::class)->name('commandes');
        Route::get('/livraison', Livraisons::class)->name('livraisons');
        Route::get('/facture', Factures::class)->name('factures');
    });
    Route::group([
        'prefix' => 'contact',
        'as' => 'contact.'
    ], function(){
        //=================================================================================================
        Route::get('/contact_user', Utilisateurs::class)->name('user');
        Route::get('/contact_client', Clients::class)->name('client');
    });
});

//==============================================ROUTE ADMIN================================================

// Route::group([
//     'middlewer' => ['auth', 'auth.admin'],
//     'as' => 'admin.'
// ], function(){
//     Route::group([
//         'prefix' => 'produit',
//         'as' => 'produit.'
//     ], function(){
        //=================================================================================================
    //     Route::get('/liste_sante', Sante::class)->name('sante');
    //     Route::get('/liste_soins', Soins::class)->name('soins');
    //     Route::get('/liste_hygiene', Hygiene::class)->name('hygiene');
    //     Route::get('/liste_ordinateur', Ordinateurs::class)->name('ordinateur');
    //     Route::get('/liste_bebe', SpecialBebe::class)->name('bebe');
    //     Route::get('/liste_accessoire', Accessoires::class)->name('accessoire');
    // });
    // Route::group([
    //     'prefix' => 'vente',
    //     'as' => 'Vente.'
    // ], function(){
        //=================================================================================================
    //     Route::get('/devis', Devis::class)->name('devis');
    //     Route::get('/commande', Commandes::class)->name('commandes');
    //     Route::get('/livraison', Livraisons::class)->name('livraisons');
    //     Route::get('/facture', Factures::class)->name('factures');
    // });
    // Route::group([
    //     'prefix' => 'contact',
    //     'as' => 'contact.'
    // ], function(){
        //=================================================================================================
//         Route::get('/contact_user', Utilisateurs::class)->name('user');
//         Route::get('/contact_client', Clients::class)->name('client');
//     });
// });

//=================================================================================================
// Route::get('contact', [UserController::class, 'contact'])->name('contact');
Route::get('contact', Contact::class)->name('contact');

// Route::get('/', [UserController::class, 'accueil'])->name('accueil');
Route::get('/', Accueil::class)->name('accueil');

Route::get('/boutique', Boutique::class)->name('boutique');
Route::get('/secrets', SecretProduit::class)->name('product.secret');
Route::get('/partenaires', DevenirPartenaire::class)->name('partenaire');

//===========================================Produit santé=========================================
// Route::get('/produit/sante', ProduitSante::class)->name('produit_sante');
Route::get('/produit/sante', [ProductSanteController::class, 'index'])->name('produit_sante');
Route::get('/produit/sante/{id}', [ProductSanteController::class, 'show'])->name('produit_sante.show');

//===========================================Produit soins=========================================
// Route::get('/produit/soins', ProduitSoins::class)->name('produit_soins');
Route::get('/produit/soins', [ProductSoinsController::class, 'index'])->name('produit_soins');
Route::get('/produit/soins/{id}', [ProductSoinsController::class, 'show'])->name('produit_soins.show');

//===========================================Produit hygiene=========================================
// Route::get('/produit/hygiene', ProduitHygiene::class)->name('produit_hygiene');
Route::get('/produit/hygiene', [ProductHygieneController::class, 'index'])->name('produit_hygiene');
Route::get('/produit/hygiene/{id}', [ProductHygieneController::class, 'show'])->name('produit_hygiene.show');

//===========================================Produit hygiene=========================================
// Route::get('/produit/bebe', ProduitBebe::class)->name('produit_bebe');
Route::get('/produit/bebe', [ProductBebeController::class, 'index'])->name('produit_bebe');
Route::get('/produit/bebe/{id}', [ProductBebeController::class, 'show'])->name('produit_bebe.show');

//===========================================Produit Ordinateur et Accessoir=========================================
// Route::get('/produit/ordinateurs', ProduitOrdinateur::class)->name('produit_ordis');
Route::get('/article/ordinateurs', [OrdisController::class, 'index'])->name('produit_ordis');
Route::get('/article/ordinateurs/{id}', [OrdisController::class, 'show'])->name('produit_ordis.show');


// Route::get('/produit/autres', ProduitAutre::class)->name('produit_autres');
Route::get('/article/accessoir', [AccessoireController::class, 'index'])->name('produit_autres');
Route::get('/article/accessoir/{id}', [AccessoireController::class, 'show'])->name('produit_autres.show');

//===========================================Commande================================================================
Route::get('/details/commande', DetailCommande::class)->name('commande.index');
// Route::post('/produit/commande', [CommandeController::class, 'store'])->name('commande');

//===========================================Partenaire==========================================
// Route::get('/partenaire', [InscripPartenaire::class, 'index'])->name('inscription.partenaire');
// Route::get('/get_states', [InscripPartenaire::class, 'getStates']);
Route::get('/insc-partenaire', PartenaireInscrip::class)->name('inscription.partenaire');

Route::get('/temoignage', Temoignage::class)->name('temoignage');

//============================================Panier============================================
Route::get('/panier', [PanierController::class, 'index'])->name('panier');
Route::post('/panier/add/{id}', [PanierController::class, 'cart_add'])->name('cart_add');
Route::post('/panier/update/{id}', [PanierController::class, 'cart_update'])->name('cart_update');
Route::post('/panier/remove/{id}', [PanierController::class, 'cart_remove'])->name('cart_remove');
Route::post('/panier/clear', [PanierController::class, 'cart_clear'])->name('cart_clear');
//===============================================================================================================
Route::get('/parametre', Parametres::class)->name('parametre.user');

// Route::get('/creation', [RegisterUserController::class, 'index'])->name('index');
// Route::post('/creation', [RegisterUserController::class, 'store'])->name('creation');
Route::get('/creation', UserRegister::class)->name('creation.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/post', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
