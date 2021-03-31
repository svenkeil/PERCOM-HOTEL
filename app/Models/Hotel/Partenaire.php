<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'name',
        'phone',
        'type_partenaire',
        'date_debut',
        'date_fin',
        'solde',
        'hotel_id',
        'created_by',
    ];
}
