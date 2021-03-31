<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualiteChambres extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hotel_id',
        'created_by'
    ];

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
