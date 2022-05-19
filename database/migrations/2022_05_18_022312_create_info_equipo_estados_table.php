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
        Schema::create('info_equipo_estados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('informe_id')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->unsignedBigInteger('equipo_id')->nullable();

            $table->foreign('informe_id')
            ->references('id')
            ->on('informes')
            ->onDelete('set null');

            $table->foreign('estado_id')
            ->references('id')
            ->on('estados')
            ->onDelete('set null');

            $table->foreign('equipo_id')
            ->references('id')
            ->on('equipos')
            ->onDelete('set null');
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
        Schema::dropIfExists('info_equipo_estados');
    }
};
