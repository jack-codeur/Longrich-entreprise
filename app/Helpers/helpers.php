<?php

use App\Models\Contacter;
use App\Models\Produit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

function userFullName(){
    return auth()->user()->nom." ". auth()->user()->prenom;
}
//set menu open
function menuClassOpen($route, $class){
    $routeActuel = request()->route()->getName();

    if (contains($routeActuel, $route)) {
        return $class;
    }
    return "";
}
//set menu active
function menuClassActive($route){
    $routeActuel = request()->route()->getName();

    if ($routeActuel === $route) {
        return 'active';
    }
    return "";
}

function contains($container, $contenu){
    return Str::contains($container, $contenu);
}

function messages(){
    Carbon::setLocale('fr');
    return Contacter::latest()->paginate(5);
}

function nbreProductByCat(){

    $product = Produit::all();

    return  $product->sum(function($index){
        if ($index->nomTypArticle === 1) {
            return $index->id;
        }
    });
}