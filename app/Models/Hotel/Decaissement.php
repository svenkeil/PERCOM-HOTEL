<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decaissement extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'remarque',
        'cloturer',
        'hotel_id',
        'created_by',
        'prix',
    ];
}
