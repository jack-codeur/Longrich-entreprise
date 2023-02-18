<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class ProduitSoins extends Component
{

    public $getProduct = [];


    public function render()
    {
        return view('livewire.user.produit-soins',
        [
            'products' => Produit::latest()->paginate(9)
        ])
                ->extends('layouts.user.master')
                ->section('produit_soins');
    }

}
