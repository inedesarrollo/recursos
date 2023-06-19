<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Piloto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
    {
        Schema::create('piloto', function (Blueprint $table) {
            $table->bigInteger('pil_id')->primary();;
            $table->string('pil_codigo', 10)->nullable();
            $table->string('pil_nom1', 15)->nullable();
            $table->string('pil_nom2', 15)->nullable();
            $table->string('pil_ape1', 15)->nullable();
            $table->string('pil_ape2', 15)->nullable();
            $table->string('pil_renglon', 15);
            $table->string('pil_dpi', 13);
            $table->string('pil_direccion', 15);
            
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
        Schema::dropIfExists('piloto');
    }

}
