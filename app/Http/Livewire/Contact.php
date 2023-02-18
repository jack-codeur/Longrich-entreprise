<?php

namespace App\Http\Livewire;

use App\Models\Contacter;
use Livewire\Component;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class Contact extends Component
{
    public $addContact = [];

    protected $rules = [
        'addContact.nom' => 'required',
        'addContact.numero' => 'required|numeric|min:8',
        'addContact.message' => 'required',
    ];

    protected $messages = [
        'addContact.nom' => 'Le champ nom est requis',
        'addContact.numero' => 'Votre numéro de téléphone est requis',
        'addContact.message' => 'Veillez nous écrire un message',
    ];

    public function render()
    {
        return view('livewire.user.contact')
                ->extends('layouts.user.master')
                ->section('contact');
    }

    public function createContact(){

        $validateContact = $this->validate();

        Contacter::create([
            "nom" => $validateContact["addContact"]["nom"],
            "numero" => $validateContact["addContact"]["numero"],
            "message" => $validateContact["addContact"]["message"],
        ]);

        $this->addContact = [];

        return back()->with('message', 'Message envoyé avec succès! Nous vous remercions pour votre confiance!');
    }
}
