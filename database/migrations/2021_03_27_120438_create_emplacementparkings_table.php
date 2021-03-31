<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmplacementparkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplacementparkings', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->nullable();
            $table->string('prix')->nullable();
            $table->string('taille')->nullable();
            $table->string('parking_id')->nullable();
            $table->string('client_id')->nullable();
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
        Schema::dropIfExists('emplacementparkings');
    }
}
