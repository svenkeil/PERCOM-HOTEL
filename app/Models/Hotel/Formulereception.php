<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulereception extends Model
{
    use HasFactory;

    protected $fillable = [
        'remarque',
        'reception_id',
        'hotel_id',
        'menus',
        'heure',
        'date',
        'cloturer',
        'prix',
        'exterieur',
        'created_by'
    ];
}
