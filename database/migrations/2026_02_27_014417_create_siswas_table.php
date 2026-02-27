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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id(); // Membuat kolom ID (Primary Key) [cite: 18]
            $table->string('nama', 50); // Kolom nama VARCHAR(50) [cite: 19]
            $table->integer('umur'); // Kolom umur INT [cite: 21]
            $table->float('nilai'); // Kolom nilai FLOAT [cite: 22]
            $table->timestamps(); // Membuat kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};