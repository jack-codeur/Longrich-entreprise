<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $fillable = ['id_typeArticle', 'nom_produit', 'EstDisponible', 'image_1', 'image_2', 'image_3', 'image_4', 'prix_promo', 'prix_reel', 'description_produit', 'mode_utilisation'];
    
    public function types(){
        return $this->belongsTo(TypeArticle::class, 'id_typeArticle', 'id');
    }
    
    public function commandes(){
        return $this->belongsToMany(Commande::class);
    }

    // public function maladies(){
    //     return $this->belongsToMany(Maladie::class, 'peut_ou_est', 'id_produit', 'id_maladie');
    // }

}
