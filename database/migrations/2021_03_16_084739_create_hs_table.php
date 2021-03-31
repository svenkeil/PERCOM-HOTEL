<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs', function (Blueprint $table) {
            $table->id();
            $table->string('id_hs', 100)->unique();
            $table->string('raison')->nullable();
            $table->string('cloturer')->default('Non');
            $table->string('chambre_id')->nullable();
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
        Schema::dropIfExists('hs');
    }
}
