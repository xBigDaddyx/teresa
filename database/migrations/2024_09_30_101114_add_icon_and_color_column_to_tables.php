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
        Schema::table('falcon_categories', function (Blueprint $table) {
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
        });
        Schema::table('falcon_sub_categories', function (Blueprint $table) {
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
        });
        Schema::table('falcon_statuses', function (Blueprint $table) {
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
        });
        Schema::table('falcon_conditions', function (Blueprint $table) {
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('falcon_categories', function (Blueprint $table) {
            $table->dropColumn('icon');
            $table->dropColumn('color');
        });
        Schema::table('falcon_sub_categories', function (Blueprint $table) {
            $table->dropColumn('icon');
            $table->dropColumn('color');
        });
        Schema::table('falcon_statuses', function (Blueprint $table) {
            $table->dropColumn('icon');
            $table->dropColumn('color');
        });
        Schema::table('falcon_conditions', function (Blueprint $table) {
            $table->dropColumn('icon');
            $table->dropColumn('color');
        });
    }
};
