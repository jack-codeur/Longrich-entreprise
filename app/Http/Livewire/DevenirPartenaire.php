<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DevenirPartenaire extends Component
{
    public $businessPresent = false;

    public function render()
    {
        return view('livewire.user.devenir-partenaire')
                ->extends('layouts.user.master')
                ->section('partenaire');
    }

    public function inscription(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }

    public function Presentation(){
        return $this->businessPresent = true;
    }
}
