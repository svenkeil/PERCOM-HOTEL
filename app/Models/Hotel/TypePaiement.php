<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePaiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'montant'
    ];

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
