<?php

namespace App\Models;

use App\Models\Association;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'date_evenement',
        'lieu',
        'nombre_place',
        'dernier_delai',
        'image',
    ];
    public function association(){
        return $this->belongsTo(Association::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
    
}
