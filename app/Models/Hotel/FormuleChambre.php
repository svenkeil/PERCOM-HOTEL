<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormuleChambre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hotel_id',
        'created_by'
    ];

    public function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
