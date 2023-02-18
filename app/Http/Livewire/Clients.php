<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = "";
    public $filterEtat = "";

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
        
        return view('livewire.admin.contact.clients',
        [
            'clients' => $searchArticle->latest()->paginate(5),
        ])
            ->extends("layouts.admin.master")
            ->section("contact");
    }
}
