<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class ProduitView extends Component
{
    

    public function render()
    {
        return view('livewire.user.produit-view',
        [
            'product_view' => Produit::all(),
        ])
                ->extends('layouts.user.master')
                ->section('view_produit');
    }

    
}
