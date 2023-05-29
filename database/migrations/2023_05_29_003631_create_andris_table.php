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
        Schema::create('andri', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->string('kelas', 5);
            $table->string('alamat', 30);
            $table->integer('nbi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('andri');
    }
};
