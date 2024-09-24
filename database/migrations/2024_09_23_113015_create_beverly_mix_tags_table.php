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
        Schema::create('beverly_mix_tags', function (Blueprint $table) {
            $table->uuid();
            $table->unsignedBigInteger('carton_box_attribute_id');
            $table->foreign('carton_box_attribute_id')->references('id')->on('carton_box_attributes');
            $table->string('tag');
            $table->unsignedBigInteger('polybag_id')->nullable();
            $table->foreign('polybag_id')->references('id')->on('polybags');
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
        Schema::dropIfExists('beverly_mix_tags');
    }
};
