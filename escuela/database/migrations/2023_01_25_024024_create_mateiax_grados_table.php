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
        Schema::create('mateiax_grados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_grado')->constrained('grados')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('id_materia')->constrained('materias')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('mateiax_grados');
    }
};
