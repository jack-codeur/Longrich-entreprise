<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripPartenaire extends Model
{
    use HasFactory;

    protected $table = 'inscrip_partenaires';
    protected $fillable = ['nom', 'nmeroTel', 'pays', 'ville', 'niveau_adhesion'];
}
