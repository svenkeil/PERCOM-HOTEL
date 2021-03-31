<?php

namespace App\Models\Comptabilite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'taux_echange'
    ];
}
