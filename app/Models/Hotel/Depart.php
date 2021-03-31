<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_depart',
        'heure_depart',
        'depart_tardif',
        'montant_additionnel',
        'remarque',
        'cloturer',
        'reception_id',
        'hotel_id',
        'created_by'
    ];
}
