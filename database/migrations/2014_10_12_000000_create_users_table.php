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
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('ville')->nullable();
            $table->string('tel')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('dateN')->nullable();
            $table->string('datecert_deb')->nullable();
            $table->string('departement')->nullable();
            $table->string('profile')->nullable();
            $table->string('adresse')->nullable();
            $table->string('salaire_de_base')->nullable();
            $table->string('matricule')->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('id_poste')->nullable();
            $table->foreign('id_poste')->references('id_poste')->on('postes')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('id_role')->nullable();
            $table->foreign('id_role')->references('id_role')->on('roles')->onDelete('cascade')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
