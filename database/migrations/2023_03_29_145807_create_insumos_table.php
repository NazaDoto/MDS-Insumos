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
        Schema::create('insumos', function (Blueprint $table) {
            $table->id('id');
            $table->string('direccion');
            $table->string('area');
            $table->string('insumo');
            $table->string('toner')->nullable();
            $table->string('solicitante');
            $table->text('firma');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insumos');
    }
};
