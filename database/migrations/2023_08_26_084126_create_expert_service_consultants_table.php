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
        Schema::create('expert_service_consultants', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('classification');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('level');
            $table->date('from');
            $table->date('to');
            $table->string('title', 255);
            $table->string('venue', 255);
            $table->string('partner_agency', 255);
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('college_id');
            //`created_at` timestamp 
            //`updated_at` timestamp 
            //`deleted_at` timestamp 
            $table->integer('report_quarter');
            $table->integer('report_year');
            $table->text('notes');
            $table->integer('for_submission');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_service_consultants');
    }
};
