<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('etoiles')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('directeur')->nullable();
            $table->string('adresse')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('logo_content_type')->nullable();
            $table->string('site_web')->nullable();
            $table->string('nb_chambres')->nullable();
            $table->string('nb_employes')->nullable();
            $table->string('geolocalisation_id')->nullable();
            $table->string('type_etablissement_id')->nullable();
            $table->string('devise_id')->nullable();
            $table->string('pays_id')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
