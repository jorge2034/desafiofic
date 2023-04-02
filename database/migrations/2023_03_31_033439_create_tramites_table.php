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
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rubro_id')->nullable()->default(null);
            $table->foreign('rubro_id')->references('id')->on('rubros');
            $table->unsignedBigInteger('comuna_id')->nullable()->default(null);
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->foreign('user_id')->references('id')->on('user');
            $table->tinyInteger('current_step');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
