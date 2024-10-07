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
        Schema::table('falcon_inventories', function (Blueprint $table) {
            $table->dropColumn('manufacture');
            $table->uuid('manufacture_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('falcon_inventories', function (Blueprint $table) {
            $table->dropColumn('manufacture_id');
            $table->string('manufacture');
        });
    }
};
