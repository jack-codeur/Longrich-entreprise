<?php

namespace App\Http\Livewire;

use App\Models\Commande;
use App\Models\Produit;
use Cart;
use Livewire\Component;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use WisdomDiala\Countrypkg\Models\Country;

class DetailCommande extends Component
{
    public $cmmande = [];
    public $cart_contents = [];

    protected $rules = [
        'cmmande.username' => 'required',
        'cmmande.nmeroTel' => 'required|numeric',
        'cmmande.country' => 'required',
        'cmmande.state' => 'required',
        'cmmande.date_livraison' => 'required'
    ];
    protected $messages = [
        'cmmande.username' => 'Cet champ est requis',
        'cmmande.nmeroTel' => 'Cet champ est requis',
        'cmmande.country' => 'Cet champ est requis',
        'cmmande.state' => 'Cet champ est requis',
        'cmmande.date_livraison' => 'Veillez mettre une date pour la livraison!'
    ];


    public function render()
    {
        $cmmd_detail = Cart::getContent();
        // Dump($cmmd_detail);
        $country = Country::all();

        return view('livewire.user.prdct_vente.detail-commande',
        [
            'cmmd_details' => $cmmd_detail,
            'countries' => $country,
        ])
                ->extends('layouts.user.master')
                ->section('content');
    }

    public function Commande(){

        $valideCommande = $this->validate();

        $cart_contents = Cart::getContent();

        $priceTotal = $cart_contents->sum(function($cart_contents){
            return $cart_contents->quantity * $cart_contents->price;
        });
        
        
        if (Auth()->user()) {
            
            if ($cart_contents) {

                foreach ($cart_contents as $commande) {
                
                    $order_1 = [
                        'username' => $valideCommande['cmmande']['username'],
                        'nmeroTel' => $valideCommande['cmmande']['nmeroTel'],
                        'country' => $valideCommande['cmmande']['country'],
                        'state' => $valideCommande['cmmande']['state'],
                        'date_livraison' => $valideCommande['cmmande']['date_livraison'],
                        'name' => $commande->name,
                        'image' => $commande->image,
                        'quantity' => $commande->quantity,
                        'price' => $commande->price,
                        'total' => $commande->total = $priceTotal,
                        'id_statusCommande' => $commande->id_statusCommande = 1,
                    ];
    
                    Commande::create($order_1);
                
                }

                Cart::clear();
        
                $this->cmmande = [];
        
                return back()->with('success', 'Votre commande à éte effectué avec succès!');

            } else {
                return back()->with('message', 'Vous ne disposez pas de produit dans votre panier !');
            }
                
        } else {

            return redirect()->to('creation')
                            ->with('message', 'Pour passer une commande, Vous devez d\'abord créer un compte et vous connecter. Si vous en disposez déjà, vous devez vous connecter.');
        }
                
        
    }
}
