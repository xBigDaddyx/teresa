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
        Schema::table('falcon_assets', function (Blueprint $table) {
            $table->uuid('age_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('falcon_assets', function (Blueprint $table) {
            $table->dropColumn('age_id');
        });
    }
};
