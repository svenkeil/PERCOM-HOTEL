<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplacementparking extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'prix',
        'parking_id',
        'taille',
        'client_id',
        'created_by'
    ];
}
