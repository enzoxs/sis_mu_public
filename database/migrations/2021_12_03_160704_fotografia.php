<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fotografia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotografia', function (Blueprint $table) {

            $table->integer('ID_FOTOGRAFIA');
            $table->integer('ID_RECINTO_DEPORTIVO',)->index();
            $table->string('PATH',200);
            $table->primary('ID_FOTOGRAFIA');
            $table->foreign('ID_RECINTO_DEPORTIVO')
                ->references('ID_RECINTO_DEPORTIVO')
                ->on('recinto_deportivo')
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
        Schema::dropIfExists('fotografia');
    }
}
