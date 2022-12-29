<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucTrimTop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suc_trim_top', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sucursal_id')->nullable();
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');

            $table->unsignedBigInteger('trimestre_id')->nullable();
            $table->foreign('trimestre_id')->references('id')->on('trimestre')->onDelete('cascade');

            $table->unsignedBigInteger('topicos_id')->nullable();
            $table->foreign('topicos_id')->references('id')->on('topicos')->onDelete('cascade');
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
        Schema::dropIfExists('suc_top_trim');
    }
}
