<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoRecinto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_recinto', function (Blueprint $table) {

            $table->integer('ID_TIPO_RECINTO');
            $table->string('NOMBRE_TIPO_RECINTO',200)->unique();
            $table->primary('ID_TIPO_RECINTO');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_recinto');
    }
}
