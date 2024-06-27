<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
