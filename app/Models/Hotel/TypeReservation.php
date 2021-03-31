<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by',
        'hotel_id'
    ];

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
