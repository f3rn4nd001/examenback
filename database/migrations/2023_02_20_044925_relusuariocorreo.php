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
        Schema::create('relusuariocorreo', function (Blueprint $table) {
            $table->bigIncrements('ecodUsuarioCorreo');
            $table->string('ecodUsuario')->collation('utf8mb4_general_ci');
            $table->foreign('ecodUsuario')->references('ecodUsuarios')->on('catusuarios');
            $table->unsignedBigInteger('ecodCorreo');
            $table->foreign('ecodCorreo')->references('ecodCorreo')->on('bitcorreos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relusuariocorreo');
    }
};
