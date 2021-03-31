<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_doc',
        'name',
        'prix_total',
        'nb_personnes',
        'date_debut',
        'date_fin',
        'nb_nuits',
        'nomfille',
        'statut',
        'venant_de',
        'se_rendant_a',
        'enfants',
        'formule',
        'formule_by',
        'adultes',
        'rabais',
        'cloturer',
        'regler',
        'remarque',
        'montant_partenaire',
        'heure_arrivee',
        'heure_depart',
        'type_sejour',
        'total_restau',
        'total_jour',
        'total_recu',
        'total_general',
        'report_veille',
        'debours',
        'aarhes',
        'solde_a_reporter',
        'observations',
        'client_id',
        'partenaire_id',
        'chambre_id',
        'receptionniste_id',
        'mode_paiement_id',
        'hotel_id'
    ];
}
