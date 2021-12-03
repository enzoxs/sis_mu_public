<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecintoDeportivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recinto_deportivo', function (Blueprint $table) {

            $table->integer('ID_RECINTO_DEPORTIVO');
            $table->integer('ID_TIPO_RECINTO')->index();
            $table->string('NOMBRE_TIPO_RECINTO',200)->unique();
            $table->string('DIRECCION_RECINTO',200);
            $table->string('COORDENADAS_RECINTO',200)->unique();
            $table->primary('ID_RECINTO_DEPORTIVO');

            $table->foreign('ID_TIPO_RECINTO')
                ->references('ID_TIPO_RECINTO')
                ->on('tipo_recinto')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recinto_deportivo');
    }
}
