<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

class InscripPartenaire extends Controller
{
    public function index(){
        return view('pages.user.inscription.inscrip_partenaire',
    [
        'countries' => Country::all(),
    ]);
    }

    public function getStates(){
        
        $country_id = request('country');

        $states = State::where('country_id', $country_id)->get();
        dump($states);


        $option = "<select value=''> Selectionner votre ville </select>";

        foreach ($states as $state) {
            $option .= '<select value="'.$state->name.'">' .$state->name. '</select>';
        }
        return $option;
    }
}
