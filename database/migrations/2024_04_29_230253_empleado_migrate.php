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
        Schema::create('empleado', function(Blueprint $table){
            $table->integer('idprestamo')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechaingreso');
            $table->double('salario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
