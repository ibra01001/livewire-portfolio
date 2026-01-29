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
        Schema::table('experiences', function (Blueprint $table) {
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
        });

        Schema::table('educations', function (Blueprint $table) {
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
        });

        Schema::table('certifications', function (Blueprint $table) {
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
        });

        Schema::table('languages', function (Blueprint $table) {
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'order']);
        });

        Schema::table('educations', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'order']);
        });

        Schema::table('certifications', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'order']);
        });

        Schema::table('languages', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'order']);
        });
    }
};

