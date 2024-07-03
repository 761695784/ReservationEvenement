<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name', 'email', 'password','telephone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relation avec les associations
    public function association()
{
    return $this->belongsTo(Association::class);
}

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
}
