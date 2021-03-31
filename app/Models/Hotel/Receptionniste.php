<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptionniste extends Model
{
    use HasFactory;
    protected $fillable = [
        'contrat',
        'matricule',
        'start_date',
        'cv',
        'type_contract',
        'end_date',
        'no_compte',
        'revenu',
        'user_id',
        'created_by'
    ];
}
