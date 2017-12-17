<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reserver extends Model
{
    protected $fillable = [
    'finperiode', 'id_users', 'id_place', 'debutperiode', 
    ];
}
