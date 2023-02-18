<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $table = 'commandes';
    protected $fillable = ['quantity', 'nmeroTel', 'username', 'country', 'state', 'name', 'price', 'total', 'id_produit', 'id_statusCommande', 'date_livraison'];

    // public function aticles(){
    //     $this->belongsTo(Article::class, 'id_commande', 'id');
    // }

    public function produits(){
        $this->belongsToMany(Produit::class);
    }

    public function users(){
        $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function statuts(){
        $this->belongsTo(StatusCommande::class, 'id_statusCommande', 'id');
    }

    public function clients(){
        $this->belongsTo(Client::class, 'id_client', 'id');
    }
}
