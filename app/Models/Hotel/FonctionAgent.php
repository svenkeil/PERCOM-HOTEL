<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;

class FonctionAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }

    function employes() {
        return $this->belongsToMany(Employe::class)->withTimestamps();
    }
}
