<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecretProduit extends Component
{
    public function render()
    {
        return view('livewire.user.secret-produit')
                ->extends('layouts.user.master')
                ->section('boutique');
    }

    public function showAddprdmerveille(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }
    public function closeEditModal(){
        $this->dispatchBrowserEvent('closeEditModal');
    } 
}
