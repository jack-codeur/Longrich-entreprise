<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = ['id_typeArticle', 'model_article', 'EstDisponible', 'image_1', 'image_2', 'image_3', 'image_4', 'prix_promo', 'prix_reel', 'caracteristique'];

    public function types(){
        return $this->belongsTo(TypeArticle::class, 'id_typeArticle', 'id');
    }

    public function commandes(){
        return $this->hasMany(Commande::class);
    }

}
