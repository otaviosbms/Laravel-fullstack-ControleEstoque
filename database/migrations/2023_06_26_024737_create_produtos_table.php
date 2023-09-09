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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('quantidade')->default(0);
            $table->date('validade')->nullable()->default('Sem validade cadastrada');
            $table->decimal('valor',10,2); //formata a forma com que o banco de dados cadastra o valor
            $table->string('descricao')->default('Sem descrição fornecida');
            $table->string('capa')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};