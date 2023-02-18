<?php

namespace App\Http\Livewire;

use App\Models\Commande;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Commandes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = "";
    public $filterEtat = "";

    public function render()
    {
        Carbon::setLocale('fr');

        $searchArticle = Commande::query();

        if ($this->search != "") {
            $searchArticle->where('nom', 'LIKE', "%" .$this->search. "%")
                          ->orWhere('prenom', 'LIKE', "%" .$this->search. "%");
        }
        if ($this->filterEtat != "") {
            $searchArticle->where('sexe', 'LIKE', "%" .$this->search. "%");
        }

        return view('livewire.admin.commandes',
        [
            'commandes' => $searchArticle->latest()->paginate(5)
        ])
        ->extends('layouts.admin.master')
        ->section('vente');
    }
}
