<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('alumno_codigo', 50);
            $table->string('alumno_nombre', 50);
            $table->integer('alumno_edad');
            $table->string('alumno_sexo', 50);
            $table->string('alumno_observacion', 300);
            $table->foreignId('alumno_id_grado')->constrained('grados')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('alumnos');
    }
};
