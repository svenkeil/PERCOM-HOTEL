<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hs extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_hs',
        'raison',
        'cloturer',
        'chambre_id',
        'hotel_id',
        'created_by',
    ];
}
