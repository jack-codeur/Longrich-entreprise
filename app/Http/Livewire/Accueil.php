<?php

namespace App\Http\Livewire;

use App\Models\Contacter;
use App\Models\Produit;
use Darryldecode\Cart\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class Accueil extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = "";
    public $businessPresent = false;
    
    public function render()
    {
        $search_product = Produit::query();

        if ($this->search != ""){
            $search_product->where('nom_produit', 'like', "%".$this->search. "%");
        }

        return view('livewire.user.accueil',[
            'produits' => $search_product->latest()->paginate(40),
        ])
                ->extends('layouts.user.master')
                ->section('accueil');
    }

    public function Presentation(){
        return $this->businessPresent = true;
    }
}
