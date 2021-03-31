<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('id_reserv')->nullable();
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();
            $table->string('heure_arrivee')->nullable();
            $table->string('date_arrivee')->nullable();
            $table->string('nb_nuits')->nullable();
            $table->string('statut')->default('Reserve');
            $table->string('nb_adultes')->nullable();
            $table->string('nb_chambres')->nullable();
            $table->string('prix_total')->nullable();
            $table->string('remarque')->nullable();
            $table->string('venant_de')->nullable();
            $table->string('se_rendant_a')->nullable();
            $table->string('nb_enfants')->nullable();
            $table->string('arrivee_effectuee')->default('Arrivee non-effecuee');
            // $table->string('chambre_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('cloturer')->default('Non');
            $table->string('regler')->default('Non');
            $table->string('type_reservation_id')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
