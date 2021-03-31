<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'total_restau',
        'total_nuitees',
        'divers',
        'total_general',
        'reception_id',
        'remarque',
        'cloturer',
        'created_by',
        'prix_rem',
        'info_ext',
        'hotel_id',
        'montant_additionnel'
    ];
}
