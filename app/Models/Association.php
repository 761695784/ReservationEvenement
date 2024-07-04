<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Authenticatable
{

    use HasFactory;
    protected $fillable = [
        'description',
        'logo',
        'adresse',
        'secteur_activite',
        'ninea',
        'date_creation',
        'user_id',
    ];
    protected $casts = [
        'active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }


}
