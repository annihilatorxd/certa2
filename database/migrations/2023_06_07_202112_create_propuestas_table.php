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
        Schema::create('propuestas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('documento',100)->nullable();
            $table->tinyInteger('estado')->default(0);
            $table->string('estudiantes_rut',10)->nullable();            
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('estudiantes_rut')->references('rut')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
