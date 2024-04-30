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
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('descripcion');
            $table->double('precio');
            $table->integer('stock');
            $table->boolean('pagaIsv');
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
