<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class UserRegister extends Component
{

    public $addUser = [];

    protected $rules = [
        'addUser.nom' => 'required',
        'addUser.nmeroTel' => 'required|min:10|numeric',
        'addUser.email' => 'string',
        'addUser.password' => 'required|min:4',
    ];

    protected $messages = [
        'addUser.nom' => 'Votre non est nécessaire',
        'addUser.nmeroTel' => 'Le numéro de téléphone est requis',
        'addUser.email' => 'Ce champ est obligatoire',
        'addUser.password' => 'Le mt de passe est requis',
    ];

    public function render()
    {
        return view('livewire.user.create_form.user-register')
                ->extends('layouts.user.master_2')
                ->section('content');
    }

    public function createUser(){
        
        $userValidate = $this->validate();
        // Dump($userValidate);

        User::create([
            'nom' => $userValidate['addUser']['nom'],
            'nmeroTel' => $userValidate['addUser']['nmeroTel'],
            'email' => $userValidate['addUser']['email'],
            'password' => Hash::make($userValidate['addUser']['password'])
        ]);

        $this->addUser = [];

        return redirect()->to('login');
    }
}
