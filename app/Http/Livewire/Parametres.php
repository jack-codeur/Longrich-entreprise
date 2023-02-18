<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Parametres extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.parametres')
            ->extends('layouts.admin.master')
            ->section('parametre');
    }
}
