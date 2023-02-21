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
        Schema::create('catusuarios', function (Blueprint $table) {
            $table->string('ecodUsuarios',250)->primary()->collation('utf8mb4_general_ci');
            $table->string('tNombre',20)->collation('utf8mb4_general_ci');
            $table->string('tApellido',20)->nullable()->collation('utf8mb4_general_ci');
            $table->string('trfc',20)->nullable()->collation('utf8mb4_general_ci');
            $table->date('fCreacion');
            $table->unsignedBigInteger('EcodEstatus');
            $table->foreign('EcodEstatus')->references('EcodEstatus')->on('catestatus');
            $table->unsignedBigInteger('ecodTipoUsuario')->nullable();
            $table->foreign('ecodTipoUsuario')->references('ecotTipoUsuario')->on('cattipousuario');
            $table->string('ecodEliminacion',250)->nullable()->collation('utf8mb4_general_ci');
            $table->dateTime('fhEliminacion', $precision = 0)->nullable();
            $table->string('tMotivoEliminacion',250)->nullable()->collation('utf8mb4_general_ci');
            $table->string('ecodCreacion',250)->nullable()->collation('utf8mb4_general_ci');
            $table->string('ecoEdicion',250)->nullable()->collation('utf8mb4_general_ci');
            $table->dateTime('fhEdicion', $precision = 0)->nullable();   
            $table->string('tPuesto',250)->collation('utf8mb4_general_ci');
            $table->double('nSarario', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catusuarios');
    }
};