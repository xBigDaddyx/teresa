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
            $table->string('asset_name');
        });
        Schema::table('falcon_categories', function (Blueprint $table) {
            $table->string('finance_asset_account')->nullable();
            $table->string('finance_asset_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('falcon_assets', function (Blueprint $table) {
            $table->dropColumn('asset_name');
        });
        Schema::table('falcon_categories', function (Blueprint $table) {
            $table->dropColumn('finance_asset_account');
            $table->dropColumn('finance_asset_type');
        });
    }
};
