<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id('servicios_id');
            $table->string('nombre');
            $table->string('imagen');
            $table->unsignedInteger('tarifa_acceso');
            $table->unsignedInteger('tarifa_socios');
            $table->text('descripcion')->nullable();
            $table->text('condiciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
