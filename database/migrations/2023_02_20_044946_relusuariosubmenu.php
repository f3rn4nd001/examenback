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
        Schema::create('relusuariosubmenu', function (Blueprint $table) {
            $table->bigIncrements('ecodrelusuarioSubMenu');

            $table->string('ecodUsuario')->collation('utf8mb4_general_ci');
            $table->foreign('ecodUsuario')->references('ecodUsuarios')->on('catusuarios');
          
            $table->unsignedBigInteger('ecodSubMenu');
            $table->foreign('ecodSubMenu')->references('ecodSubMenu')->on('catsubmenu');
          
            $table->unsignedBigInteger('ecodMenu');
            $table->foreign('ecodMenu')->references('ecodMenu')->on('catmenu');
          
            $table->unsignedBigInteger('ecodPermisos');
            $table->foreign('ecodPermisos')->references('ecodPermisos')->on('catpermisos');
          
            $table->unsignedBigInteger('ecodController')->nullable();
            $table->foreign('ecodController')->references('ecodController')->on('catcontroller');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relusuariosubmenu');
    }
};
