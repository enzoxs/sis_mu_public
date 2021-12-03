<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {

            $table->integer('ID_USUARIO');
            $table->string('RUN',13)->unique();
            $table->string('USERNAME_USUARIO',200)->unique();
            $table->string('PASSWORD_USUARIO',200);
            $table->string('NOMBRE_USUARIO',200);
            $table->string('APELLIDO_USUARIO',200);
            $table->string('DIRECCION_USUARIO',200);
            $table->string('MAIL_USUARIO',200)->unique();
            $table->string('CIUDAD_USUARIO',200);
            $table->string('FECHA_REGISTRO',200);
            $table->string('ESTADO_USUARIO',200);
            $table->string('IMAGEN_PERFIL',200);
            $table->string('CODIGO_VERIFICACION',200);
            $table->primary('ID_USUARIO');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
