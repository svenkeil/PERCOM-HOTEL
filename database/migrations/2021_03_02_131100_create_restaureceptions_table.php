<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaureceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaureceptions', function (Blueprint $table) {
            $table->id();
            $table->string('remarque')->nullable();
            $table->string('reception_id')->nullable();
            $table->string('hotel_id')->nullable();
            $table->string('menus')->nullable();
            $table->string('cloturer')->default('Non');
            $table->string('exterieur')->default('Non');
            $table->string('prix')->nullable();
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
        Schema::dropIfExists('restaureceptions');
    }
}
