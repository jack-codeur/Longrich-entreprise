<?php

namespace App\Http\Livewire;

use App\Models\InscripPartenaire;
use Carbon\Carbon;
use Livewire\Component;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

class PartenaireInscrip extends Component
{
    public $search = "";
    public $InscriPart = [];
    
    protected $rules = [
        'InscriPart.nom' => 'required',
        'InscriPart.nmeroTel' => 'required|integer',
        'InscriPart.pays' => 'required',
        'InscriPart.ville' => 'required',
        'InscriPart.niveau_adhesion' => 'required',
    ];

    protected $messages = [
        'InscriPart.nom' => 'Cet champ est requis',
        'InscriPart.nmeroTel' => 'Cet champ est requis',
        'InscriPart.pays' => 'Cet champ est requis',
        'InscriPart.ville' => 'Cet champ est requis',
        'InscriPart.niveau_adhesion' => 'Cet champ est requis',
    ];

    public function render()
    {
        // Carbon::setLocale('fr');
        
        $states = State::query();

        if($this->search != ""){
            $states->where("name", "LIKE", "%".$this->search."%")->get();
        }

        return view('livewire.user.create_form.partenaire-inscrip',
        [
            'countries' => Country::all(),
            'states' => State::all()
        ])
                ->extends('layouts.user.master_2')
                ->section('content');
    }

    public function InscriPartenaire(){

        $validateInscriP = $this->validate();

        // Dump($validateInscriP);

        InscripPartenaire::create([
        'nom' => $validateInscriP['InscriPart']['nom'],
        'nmeroTel' => $validateInscriP['InscriPart']['nmeroTel'],
        'pays' => $validateInscriP['InscriPart']['pays'],
        'ville' => $validateInscriP['InscriPart']['ville'],
        'niveau_adhesion' => $validateInscriP['InscriPart']['niveau_adhesion'],
        ]);

        $this->InscriPart = [];
    }

}
