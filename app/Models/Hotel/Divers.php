<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divers extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prix',
        'remarque',
        'cloturer',
        'reception_id',
        'hotel_id',
        'created_by'
    ];
}
