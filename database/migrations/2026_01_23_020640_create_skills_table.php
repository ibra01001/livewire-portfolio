<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();

            $table->string('name'); // PHP, Laravel, JS
            $table->string('image')->nullable(); // PHP, Laravel, JS
            $table->string('description')->nullable();
            $table->string('level')->nullable(); // Beginner, Advanced
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
