<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Factures extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.factures')
            ->extends('layouts.admin.master')
            ->section('vente');
    }
}
