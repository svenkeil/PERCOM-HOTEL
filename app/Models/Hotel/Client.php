<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'prenom',
        'adresse',
        'tel',
        'date_naissance',
        'lieu_naissance',
        'profession',
        'pays',
        'entreprise',
        'pays_residence',
        'identifiant_unique',
        'ville',
        'no_piece_personnelle',
        'delivre_le',
        'lieu_delivrance',
        'type_piece',
        'photo_piece',
        'sexe'
    ];
}
