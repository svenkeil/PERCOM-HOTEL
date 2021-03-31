<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReglementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('total_nuitees')->nullable();
            $table->string('total_restau')->nullable();
            $table->string('divers')->nullable();
            $table->string('total_general')->nullable();
            $table->string('remarque')->nullable();
            $table->string('prix_rem')->nullable();
            $table->string('info_ext')->nullable();
            $table->string('montant_additionnel')->nullable();
            $table->string('cloturer')->default('Non');
            $table->string('hotel_id')->nullable();
            $table->string('reception_id')->nullable();
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
        Schema::dropIfExists('reglements');
    }
}
