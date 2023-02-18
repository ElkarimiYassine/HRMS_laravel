<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condidats', function (Blueprint $table) {
            $table->id('id_con');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('tel')->nullable();
            $table->string('poste')->nullable();
            $table->string('dateN')->nullable();
            $table->string('CV')->nullable();
            $table->string('cni')->unique();
            $table->string('email')->unique();
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
        Schema::dropIfExists('condidats');
    }
}
