<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;
    
    protected $table = 'secrets';
    protected $fillable  = ['titre', 's-titre', 'image', 'description', 'm-utilisation'];
}
