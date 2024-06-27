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
        Schema::create('hoteis', function (Blueprint $table) {
            // Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades.
            $table->id();
            $table->string('nome');
            $table->string('cidade');
            $table->string('pais');
            $table->integer('estrelas');
            $table->integer('valorDiaria');            
            $table->string('comodidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoteis');
    }
};
