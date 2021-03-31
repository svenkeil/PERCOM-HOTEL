<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->string('prix')->nullable();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('deb_reserv')->nullable();
            $table->string('fin_reserv')->nullable();
            $table->string('statut')->default('Libre');
            $table->string('reserver')->default('Non');
            $table->string('hs')->default('Non');
            // $table->string('nombre')->nullable();
            $table->string('type_chambres_id')->nullable();
            $table->string('qualite_chambres_id')->nullable();
            $table->string('formule_chambres_id')->nullable();
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
        Schema::dropIfExists('chambres');
    }
}
