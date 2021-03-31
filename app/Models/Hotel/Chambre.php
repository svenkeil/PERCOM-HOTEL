<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'prix',
        'hs',
        'description',
        'photo',
        'deb_reserv',
        'fin_reserv',
        'statut',
        'reserver',
        'created_by'
    ];

    public function reservations() {
        return $this->belongsToMany(Reservation::class)->withTimestamps();
    }
}
