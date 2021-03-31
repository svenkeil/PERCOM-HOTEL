<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel\FonctionAgent;

class Employe extends Model
{
    use HasFactory;

    protected $fillable=[
        'email',
        'name',
        'prenom',
        'poste',
        'photo',
        'tel',
        'salaire',
        'sexe'
    ];

    function fonctionagents() {
        return $this->belongsToMany(FonctionAgent::class)->withTimestamps();
    }
}
