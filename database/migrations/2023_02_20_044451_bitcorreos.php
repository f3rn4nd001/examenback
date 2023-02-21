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
        Schema::create('bitcorreos', function (Blueprint $table) {
            $table->bigIncrements('ecodCorreo');
            $table->string('tcorreo',200)->collation('utf8mb4_general_ci');
            $table->string('tpassword',250)->collation('utf8mb4_general_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitcorreos');
    }
};
