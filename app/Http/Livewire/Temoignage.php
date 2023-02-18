<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Temoignage extends Component
{
    public $businessPresent = false;
    
    public function render()
    {
        return view('livewire.user.temoignage')
                ->extends('layouts.user.master')
                ->section('content');
    }

    public function Presentation(){
        return $this->businessPresent = true;
    }
}
