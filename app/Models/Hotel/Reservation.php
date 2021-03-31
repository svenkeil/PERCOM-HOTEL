<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reserv',
        'date_debut',
        'date_fin',
        'nb_nuits',
        'statut',
        'remarque',
        'venant_de',
        'se_rendant_a',
        'nb_adultes',
        'nb_chambres',
        'prix_total',
        'nb_enfants',
        'heure_arrivee',
        'date_arrivee',
        'cloturer',
        'regler',
        'arrivee_effectuee',
        'created_by',
        // 'mode_paiement' // many to many avec mode de paiement
        /*'chambre_id',
        'client_id',
        'user_id'*/
    ];

    public function chambres() {
        return $this->belongsToMany(Chambre::class)->withTimestamps();
    }

    public function modepaiements() {
        return $this->belongsToMany(ModePaiement::class)->withTimestamps();
    }

    function hotels() {
        return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
