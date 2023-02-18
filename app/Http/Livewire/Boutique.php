<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class Boutique extends Component
{
    public $search = "";
    public $secret = [];

    protected $rules = [
        'secret.titre' => 'require',
        'secret.s-titre' => 'require',
        'secret.image' => 'require',
        'secret.description' => 'require',
        'secret.m-utilisateur' => 'require'
    ];

    public function SecretInscription(){
        $validateSecret = $this->validate();
        Dump($validateSecret);
    }

    public function render()
    {
        $search_product = Produit::query();

        if($this->search != ""){
            $search_product->where('nom_produit', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('id_typeArticle', 'LIKE', '%'.$this->search.'%');
        }
        return view('livewire.user.boutique',
        [
            'products' => $search_product->latest()->paginate(13)
        ])
                ->extends('layouts.user.master')
                ->section('boutique');

        return view('pages.user.prdct_vente.detail_merveille');
    }

    //la gestion des sécrets des produits longriche 
    public function showAddprdSecret(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }
    public function closeEditModal(){
        $this->dispatchBrowserEvent('closeEditModal');
    }
}
