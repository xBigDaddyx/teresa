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
        Schema::create('carton_box_attributes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('carton_box_id');
            $table->foreign('carton_box_id')->references('id')->on('carton_boxes')->onDelete('cascade');
            $table->string('tag');
            $table->string('size');
            $table->string('color');
            $table->integer('quantity');
            $table->string('type')->default('MIX');
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
        Schema::dropIfExists('carton_box_attributes');
    }
};
