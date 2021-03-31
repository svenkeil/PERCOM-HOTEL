<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('tel')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('profession')->nullable();
            $table->string('pays')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('pays_residence')->nullable();
            $table->string('identifiant_unique')->unique();
            $table->string('ville')->nullable();
            $table->string('no_piece_personnelle')->unique();
            $table->string('delivre_le')->nullable();
            $table->string('lieu_delivrance')->nullable();
            $table->string('type_piece')->nullable();
            $table->string('photo_piece')->nullable();
            $table->string('sexe')->nullable();
            $table->string('hotel_id')->nullable();
            $table->string('type_client_id')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
