<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('nombre_comp',255);
            $table -> integer('cedula');
            $table -> date('fecha_nac');
            $table -> date('fecha_reg');
            $table -> string('correo',255);
            $table -> string('avatar')->default('default.jpeg');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
