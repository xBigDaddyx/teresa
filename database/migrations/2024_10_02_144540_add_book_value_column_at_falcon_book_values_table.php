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
        Schema::table('falcon_book_values', function (Blueprint $table) {
            $table->decimal('book_value', 12, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('falcon_book_values', function (Blueprint $table) {
            $table->dropColumn('book_value');
        });
    }
};
