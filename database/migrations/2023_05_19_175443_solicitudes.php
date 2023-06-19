<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigInteger('soli_id')->primary();
            $table->string('nombres', 45);
            $table->string('apellidos', 45);
            $table->string('fecha', 45);
            $table->string('cargo', 45);
            $table->string('departamento', 45);
            $table->string('sol_justificacion', 500)->nullable();
            $table->string('horasext_necesarias', 30);
            $table->string('detalle_razonhorasext', 75);
            $table->string('Hora_entrada', 15);
            $table->string('Hora_salida', 15);
            $table->boolean('sol_activo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
