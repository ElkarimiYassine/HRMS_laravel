<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dem_docs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('id_doc');
            $table->foreign('id_doc')->references('id_doc')->on('documents')->onDelete('cascade')->nullable();
            $table->integer('statut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dem_docs');
    }
}
