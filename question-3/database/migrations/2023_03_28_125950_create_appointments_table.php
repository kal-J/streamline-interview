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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("patient_id");
            $table->bigInteger("health_officer_id");
            $table->text("clinical_notes");
            $table->enum("visiting_hopistal", ["Yes", "No"]);
            $table->enum("complete", ["Yes", "No"]);
            $table->dateTime("appointment_date_time");
            $table->bigInteger("modified_by");
            $table->bigInteger("created_by");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
