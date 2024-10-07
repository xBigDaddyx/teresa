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
        Schema::create('falcon_inventories', function (Blueprint $table) {
            $table->uuid();
            $table->json('pictures')->nullable();
            $table->string('manufacture');
            $table->string('model');
            $table->json('specifications');
            $table->string('serial');
            $table->uuid('condition_id')->nullable();
            $table->uuid('status_id')->nullable();
            $table->uuid('asset_id')->nullable();
            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('falcon_inventories');
    }
};
