<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptable extends Model
{
    use HasFactory;
    protected $fillable = [
        'contrat',
        'matricule',
        'cv',
        'type_contract',
        'start_date',
        'end_date',
        'no_compte',
        'revenu',
        'user_id',
        'created_by'
    ];
}
