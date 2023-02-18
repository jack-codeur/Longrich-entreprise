<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = "";
    public $filterEtat = "";

    public $addUser = [];

    protected $rules = [
        'addUser.nom' => 'required',
        'addUser.numeroTel' => 'required',
        'addUser.email' => 'required|email',
        'addUser.password' => 'required|min:4',
    ];

    protected $messages = [
        'addUser.nom' => 'Votre non est nécessaire',
        'addUser.numeroTel' => 'Le numéro de téléphone est requis',
        'addUser.email' => 'Ce champ est obligatoire',
        'addUser.password' => 'Le mt de passe est requis',
    ];

    public function render()
    {
        Carbon::setLocale('fr');

        $searchArticle = User::query();

        if ($this->search != "") {
            $searchArticle->where('nom', 'LIKE', "%" .$this->search. "%")
                          ->orWhere('prenom', 'LIKE', "%" .$this->search. "%");
        }
        if ($this->filterEtat != "") {
            $searchArticle->where('sexe', 'LIKE', "%" .$this->search. "%");
        }

        return view('livewire.admin.contact.utilisateurs',
        [
            'users' => $searchArticle->latest()->paginate(5),
        ])
            ->extends('layouts.admin.master')
            ->section('contact');
    }
    
    public function showAddUser(){
        $this->dispatchBrowserEvent("showModal");
    }
    public function closeModal(){
        $this->dispatchBrowserEvent("closeModal");
    }
}
