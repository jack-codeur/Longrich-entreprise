<?php

namespace App\Http\Livewire;

use App\Models\Contacter;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AccueilAdmin extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.accueil-admin',[
            'users' => User::all(),
            'messages' => Contacter::all()
        ])
            ->extends('layouts.admin.master')
            ->section('accueil');
    }
}
