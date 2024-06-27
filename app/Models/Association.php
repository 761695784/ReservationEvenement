<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'association'; // Définir le nom du guard personnalisé si nécessaire

    protected $fillable = [
        'description', 'logo', 'adresse', 'secteur_activite', 'ninea', 'date_creation', 'user_id', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relation avec l'utilisateur principal
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
