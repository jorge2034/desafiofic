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
        Schema::create('comunas', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->nullable(false)->unique();
            $table->string('description',200)->nullable(false)->unique();
            $table->string('direction',200)->nullable(false)->unique();
            $table->string('phone',20)->nullable(false)->unique();
            $table->string('lgn',200)->nullable(false)->unique();
            $table->string('lat',200)->nullable(false)->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunas');
    }
};
