<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Commandes;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Cart;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class CommandeController extends Controller
{
    // public $commandes = [];

    public function index(){

        $content = Cart::getContent();
        $product = Produit::all();

        // dd($product->all()); die();

        return view('pages.user.prdct_vente.detail_commde',
        [
            'cmmd_details' => $content,
            'products' => $product,
        ]);
    }

    //=====================La gestion de la commande====================================
   public function store(Request $request){

        $prdt_contents = Cart::getContent();

        //dd($prdt_contents->all()); die();
        // $order = new Commande();
        $priceTotal = $prdt_contents->sum(function($prdt_contents){
            return $prdt_contents->quantity * $prdt_contents->price;
        });

        foreach ($prdt_contents as $commande) {
            //dd($commande); die();
            
            if (auth()->user()) {
                //Calcul du prix totale des produits selectionnés
                
                $order = [
                    'nom' => $commande->name,
                    'quantite' => $commande->quantity,
                    'prix' => $commande->price,
                    'total' => $commande->total = $priceTotal,
                    'id_statusCommande' => $commande->id_statusCommande = 1,
                ];
                // dd($order); die();
                Commande::create($order);

            }
            
            
            return redirect()->route('creation')
                            ->with('message', 'Pour passer une commande, Vous devez d\'abord créer un compte, et si vous en avez déjà, vous devez vous connectez par la suite.');
        }
        return back()->with('message', 'Votre commande à éte effectué avec succès!');
    }
}
