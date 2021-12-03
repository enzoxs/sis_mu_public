<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_admin', function (Blueprint $table) {

            $table->integer('ID_USUARIO_ID');
            $table->integer('ID_TIPO_USUARIO');
            $table->string('USERNAME_USUARIO_AD',50)->unique();
            $table->string('PASSWORD_USUARIO_AD',100);
            $table->string('NOMBRE_USUARIO_AD',200);
            $table->string('APELLIDO_USUARIO_AD',200);
            $table->string('FECHA_REGISTRO_USUARIO_AD',200);
            $table->primary('ID_USUARIO_ID');
            $table->foreign('ID_TIPO_USUARIO')
                ->references('ID_TIPO_USUARIO')
                ->on('tipo_usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');

           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->unsigned()->index();
        });







    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_admin');
    }
}
