<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'etoiles',
        'date_creation',
        'email',
        'contact',
        'directeur',
        'logo',
        'logo_content_type',
        'adresse',
        'site_web',
        'nb_chambres',
        'nb_employes',
        'created_by',
    ];

    /* function typereservation() {
        return $this->hasMany('App\Models\Hotel\TypeReservation', 'hotel_id', 'id');
    }*/

    function typereservations() {
        return $this->belongsToMany(TypeReservation::class)->withTimestamps();
    }

    function serviceshotels() {
        return $this->belongsToMany(ServicesHotel::class)->withTimestamps();
    }

    function modepaiements() {
        return $this->belongsToMany(ModePaiement::class)->withTimestamps();
    }

    function qualitechambres() {
        return $this->belongsToMany(QualiteChambres::class)->withTimestamps();
    }

    function typechambres() {
        return $this->belongsToMany(TypeChambres::class)->withTimestamps();
    }

    function formulechambres() {
        return $this->belongsToMany(FormuleChambre::class)->withTimestamps();
    }

    function typepaiements() {
        return $this->belongsToMany(TypePaiement::class)->withTimestamps();
    }

    function fonctionagents() {
        return $this->belongsToMany(FonctionAgent::class)->withTimestamps();
    }

    function reservations() {
        return $this->belongsToMany(Reservation::class)->withTimestamps();
    }


    function restaurations() {
        return $this->belongsToMany(Restauration::class)->withTimestamps();
    }
}
