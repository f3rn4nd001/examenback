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
        Schema::create('catsubmenu', function (Blueprint $table) {
            $table->bigIncrements('ecodSubMenu');
            $table->string('tNombre',50)->collation('utf8mb4_general_ci');
            $table->string('url',100)->collation('utf8mb4_general_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catsubmenu');
    }
};