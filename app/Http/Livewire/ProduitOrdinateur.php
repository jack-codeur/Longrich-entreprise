<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class ProduitOrdinateur extends Component
{
    public function render()
    {
        return view('livewire.user.produit-ordinateur',
        [
            'products' => Produit::latest()->paginate(9)
        ])
                ->extends('layouts.user.master')
                ->section('produit_ordi');
    }
}
