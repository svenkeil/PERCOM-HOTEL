<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloture extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'heure',
        'encaissement',
        'motif',
        'decaissement',
        'hotel_id',
        'created_by',
    ];
}
