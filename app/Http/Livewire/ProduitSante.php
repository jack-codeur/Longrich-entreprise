<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ProduitSante extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.user.produit-sante',
            [
                'products' => Produit::latest()->paginate(9),
            ])
                ->extends('layouts.user.master')
                ->section('produit_sante');
    }

}
