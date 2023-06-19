<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculo extends Migration
{

       public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->bigInteger('veh_id')->primary();
            $table->string('veh_presponsable', 15);
            $table->string('veh_tarjetacir', 15);
            $table->string('veh_Tipovehiculo', 15);
            $table->string('veh_linea', 15);
            $table->string('veh_chasis', 15);
            $table->string('veh_serie', 15);
            $table->string('veh_asiento', 13);
            $table->string('veh_ejes', 15);
            $table->string('veh_color', 15);
            $table->string('veh_placa', 15);
            $table->string('veh_marca', 15);
            $table->string('veh_modelo', 15);
            $table->string('veh_vin', 15);
            $table->string('veh_motor', 15);
            $table->string('veh_cilindro', 15);
            $table->string('veh_cc', 15);
            $table->string('veh_ton', 15);
            $table->string('veh_Numinventario', 15);
            $table->boolean('veh_activo');
            $table->string('foto');
            $table->string('foto2');
            $table->string('foto3');

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
        Schema::dropIfExists('vehiculo');
    }
}
