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
        // Schema::table('falcon_assets', function (Blueprint $table) {
        //     $table->string('capex_code')->nullable();
        // });
        Schema::table('falcon_book_values', function (Blueprint $table) {
            $table->string('depreciation_rate')->nullable();
        });
        Schema::table('falcon_inventories', function (Blueprint $table) {
            if (config('falcon.has_tenant')) {
                $table->unsignedBigInteger('company_id')->nullable();
                $table->foreign('company_id')->references('id')->on('companies');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('falcon_assets', function (Blueprint $table) {
        //     $table->dropColumn('capex_code');
        // });
        Schema::table('falcon_book_values', function (Blueprint $table) {
            $table->dropColumn('depreciation_rate');
        });
        Schema::table('falcon_inventories', function (Blueprint $table) {
            if (config('falcon.has_tenant')) {
                $table->dropColumn('company_id');
            }
        });
    }
};
