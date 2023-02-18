<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = ['nom', 'nmeroTel', 'email', 'password'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function commandes(){
        return $this->hasMany(Commande::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class, 'user_roles', 'id_user', 'id_role');
    }

//====================Vérification des roles de l'utilisateur=========================
    public function hasRole($role){
        return $this->roles()->where('nomRole', $role)->first() !== null;
    }

    public function hasAnyRole($roles){
        return $this->roles()->whereIn('nomRole', $roles)->first() !== null;
    }
}
