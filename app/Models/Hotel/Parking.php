<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'matricule',
        'nom',
        'nb_places',
        'location',
        'superficie',
        'hotel_id',
        'gerant_id',
        'created_by',

    ];
}
