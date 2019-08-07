<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_materia', function (Blueprint $table) {
            $table->integer('usuario_id')->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->integer('materia_id')->foreign('materia_id')->references('id')->on('materia')->onDelete('cascade');
            $table->primary(['materia_id', 'usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_materia');
    }
}
