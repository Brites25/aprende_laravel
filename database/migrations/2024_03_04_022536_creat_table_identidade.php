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
    Schema::create('identidade', function (Blueprint $table) {
        $table->id();
        $table->string('naran')->nullable(false);
        $table->bigInteger('nre')->nullable(false);
        $table->string('hela_fatin')->nullble(false);
        $table->string('num_kontaktu')->nullable(false);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identidade');
    }
};
