<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigInteger('empl_id')->primary();;
            $table->string('empl_codigo', 10)->nullable();
            $table->string('empl_nom1', 15)->nullable();
            $table->string('empl_nom2', 15)->nullable();
            $table->string('empl_ape1', 15)->nullable();
            $table->string('empl_ape2', 15)->nullable();
            $table->string('empl_renglon', 15);
            $table->string('empl_dpi', 13);
            $table->date('empl_fechainicio', 15);
            $table->string('empl_direccion', 15);
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
        Schema::dropIfExists('empleados');
    }
}
