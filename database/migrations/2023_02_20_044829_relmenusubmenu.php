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
        Schema::create('relmenusubmenu', function (Blueprint $table) {
            $table->bigIncrements('ecosMenuSubmenu');
            $table->unsignedBigInteger('ecodSubmenu');
            $table->foreign('ecodSubmenu')->references('ecodSubMenu')->on('catsubmenu');
            $table->unsignedBigInteger('ecodMenu');
            $table->foreign('ecodMenu')->references('ecodMenu')->on('catmenu');
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
        Schema::dropIfExists('relmenusubmenu');
    }
};