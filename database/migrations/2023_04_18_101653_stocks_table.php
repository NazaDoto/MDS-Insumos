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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id('id');
            $table->integer('teclados')->default(0);
            $table->integer('mouse')->default(0);
            $table->integer('1060')->default(0);
            $table->integer('296')->default(0);
            $table->integer('12A')->default(0);
            $table->integer('17A')->default(0);
            $table->integer('35A')->default(0);
            $table->integer('48A')->default(0);
            $table->integer('85A')->default(0);
            $table->integer('105A')->default(0);
            $table->integer('664')->default(0);
            $table->integer('101')->default(0);
            $table->integer('104')->default(0);
            $table->integer('111')->default(0);
            $table->integer('PB219')->default(0);
            $table->integer('PD219')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

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
