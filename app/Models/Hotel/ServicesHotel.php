<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
