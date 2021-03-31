<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->longText('photo')->nullable();
            $table->string('activate_key')->nullable();
            $table->string('reset_key')->nullable();
            $table->string('tel')->nullable();
            $table->string('role')->default('user');
            $table->string('poste')->nullable();
            $table->string('statut')->default('0');
            $table->string('pseudo')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('created_by')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
