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
        Schema::create('segundas', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('cpf',200);
            $table->integer('ano');
            $table->string('nome');
            $table->string('preço');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('segundas');
    }
};
