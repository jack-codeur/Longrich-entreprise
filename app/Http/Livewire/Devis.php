<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Devis extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.devis')
            ->extends('layouts.admin.master')
            ->section('vente');
    }
}
