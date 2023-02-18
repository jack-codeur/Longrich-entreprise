<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;

    protected $table = "maladies";

    // public function produits(){
    //     return $this->belongsToMany(Produit::class, 'peut_ou_est', 'id_maladie', 'id_produit');
    // }
}
