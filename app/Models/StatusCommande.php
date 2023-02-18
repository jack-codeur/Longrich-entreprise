<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCommande extends Model
{
    use HasFactory;

    protected $table = 'status_commandes';

    public function commandes(){
        $this->hasMany(Commande::class);
    }
}
