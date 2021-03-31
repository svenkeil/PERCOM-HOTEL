<?php

namespace App\Models\Hotel;;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restauration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'code',
        'statut',
        'prix',
        'date_de_preparation',
        'description',
        'restaurateur_id',
    ];

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
