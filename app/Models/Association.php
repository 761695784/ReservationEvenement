<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
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
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function evenement(){
        return $this->hasMany(Evenement::class);
    }
    
}
