<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptions', function (Blueprint $table) {
            $table->id();
            $table->string('id_doc')->nullable();
            $table->string('name')->unique();
            $table->string('prix_total')->nullable();
            $table->string('nb_personnes')->nullable();
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();
            $table->string('nb_nuits')->nullable();
            $table->string('statut')->default('En cours');
            $table->string('nomfille')->nullable();
            $table->string('venant_de')->nullable();
            $table->string('se_rendant_a')->nullable();
            $table->string('enfants')->nullable();
            $table->string('adultes')->nullable();
            $table->string('rabais')->nullable();
            $table->string('montant_partenaire')->nullable();
            $table->string('cloturer')->default('Non');
            $table->string('regler')->default('Non');
            $table->string('formule')->default('Non');
            $table->string('formule_by')->nullable();
            $table->string('heure_arrivee')->nullable();
            $table->string('heure_depart')->nullable();
            $table->string('type_sejour')->nullable();
            $table->string('remarque')->nullable();
            $table->string('total_restau')->nullable();
            $table->string('total_jour')->nullable();
            $table->string('total_recu')->nullable();
            $table->string('total_general')->nullable();
            $table->string('report_veille')->nullable();
            $table->string('debours')->nullable();
            $table->string('aarhes')->nullable();
            $table->string('solde_a_reporter')->default('0.0');
            $table->string('observations')->nullable();
            $table->string('client_id')->nullable();
            $table->string('partenaire_id')->nullable();
            $table->string('chambre_id')->nullable();
            $table->string('receptionniste_id')->nullable();
            $table->string('mode_paiement_id')->nullable();
            $table->string('hotel_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receptions');
    }
}
