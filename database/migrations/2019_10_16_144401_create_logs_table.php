<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('problema_id');
            $table->string('problema');
            $table->string('user');
            $table->string('area');
            $table->string('responsable');
            $table->string('estado');
            $table->string('equipo');
            $table->text('descripcion');
            $table->string('fecha_reporte');
            $table->string('fecha_resolucion');
            $table->string('organization');
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
        Schema::dropIfExists('logs');
    }
}
