<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deloger extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_delog',
        'nv_chambre',
        'ancienne_chambre',
        'raison',
        'cloturer',
        'reception_id',
        'hotel_id',
        'created_by'

    ];
}
