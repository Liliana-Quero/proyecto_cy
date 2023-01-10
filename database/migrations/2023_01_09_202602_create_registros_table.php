<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sucursal_id')->unsigned();
            $table->bigInteger('trimestre_id')->unsigned();
            $table->bigInteger('topico_id')->unsigned();
            $table->string('nombre_socio')->nullable();
            $table->integer('num_socio')->nullable();
            $table->date('fecha_colocacion')->nullable();
            $table->double('monto')->nullable();
            $table->date('plazo_evidencia')->nullable();
            $table->string('finalidad')->nullable();
            $table->string('factura')->nullable();
            $table->string('endoso_a_favor_cooperativa')->nullable();
            $table->string('garantia_cubre_credito')->nullable();
            $table->string('poliza')->nullable();
            $table->string('seguro')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('ref_credito')->nullable();
            $table->string('cumplimiento')->nullable();
            $table->integer('nivel_riesgo')->nullable();
            $table->string('estatus')->nullable();
            $table->string('puntaje_nivel_riesgo')->nullable();
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
        Schema::dropIfExists('registros');
    }
}
