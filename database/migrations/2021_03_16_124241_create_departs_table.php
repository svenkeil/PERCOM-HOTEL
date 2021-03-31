<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departs', function (Blueprint $table) {
            $table->id();
            $table->string('date_depart')->nullable();
            $table->string('heure_depart')->nullable();
            $table->string('depart_tardif')->nullable();
            $table->string('montant_additionnel')->nullable();
            $table->string('remarque')->nullable();
            $table->string('cloturer')->default('Non');
            $table->string('reception_id')->nullable();
            $table->string('hotel_id')->nullable();
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
        Schema::dropIfExists('departs');
    }
}
