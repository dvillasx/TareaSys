<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('nombre_tarea');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('descripcion');
            // $table->bigInteger('categoria_id')->unsigned();
            $table->smallInteger('prioridad')->unsigned();
            $table->string('estatus')->default('Por Hacer');
            $table->boolean('terminada')->default(0);
            $table->timestamps();

            //Mantener la intregidad de la base de datoso|ondelete borra todo lo que este relacionado al el
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
