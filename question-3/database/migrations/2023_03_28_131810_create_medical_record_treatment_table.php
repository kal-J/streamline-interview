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
        Schema::create('medical_record_treatment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("medical_record_id");
            $table->bigInteger("treatment_id");
            $table->bigInteger("modified_by");
            $table->bigInteger("created_by");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_record_treatment');
    }
};
