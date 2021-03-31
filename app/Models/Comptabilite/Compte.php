<?php

namespace App\Models\Comptabilite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_compte',
        'tva',
        'journal',
    ];
}
