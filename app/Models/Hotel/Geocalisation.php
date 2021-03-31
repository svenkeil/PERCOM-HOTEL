<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geocalisation extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'latitude',
        // 'longitude',
        'fuseau_horaire'
    ];
}
