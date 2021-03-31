<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelogersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delogers', function (Blueprint $table) {
            $table->id();
            $table->string('id_delog')->unique();
            $table->string('nv_chambre')->nullable();
            $table->string('ancienne_chambre')->nullable();
            $table->string('raison')->nullable();
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
        Schema::dropIfExists('delogers');
    }
}
