<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModePaiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'solde',
        'created_by',
        'hotel_id'
    ];

    public function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }

    public function reservations() {
        return $this->belongsToMany(Reservation::class)->withTimestamps();
    }
}
