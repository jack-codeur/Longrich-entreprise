<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Livraisons extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.livraisons')
            ->extends('layouts.admin.master')
            ->section('vente');
    }
}
