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
        Schema::create('extension_services', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('ext_code');
            $table->unsignedBigInteger('level');
            $table->unsignedBigInteger('status');
            $table->unsignedBigInteger('nature_of_involvement');
            $table->string('classification', 255);
            $table->unsignedBigInteger('type');
            $table->string('title_of_extension_program', 255);
            $table->string('title_of_extension_project', 255);
            $table->string('title_of_extension_activity', 255);
            $table->string('funding_agency', 255);
            $table->unsignedBigInteger('currency_amount_of_funding');
            $table->decimal('amount_of_funding', $precision = 15, $scale = 2);
            $table->unsignedBigInteger('type_of_funding');
            $table->date('from');
            $table->date('to');
            $table->integer('no_of_trainees_or_beneficiaries');
            $table->decimal('total_no_of_hours', $precision = 15, $scale = 2);
            $table->string('classification_of_trainees_or_beneficiaries', 255);
            $table->string('place_or_venue', 255);
            $table->string('keywords', 255);

            $table->integer(`quality_poor`);
            $table->integer(`quality_fair`);
            $table->integer(`quality_satisfactory`);
            $table->integer(`quality_very_satisfactory`);
            $table->integer(`quality_outstanding`);
            $table->integer(`timeliness_poor`);
            $table->integer(`timeliness_fair`);
            $table->integer(`timeliness_satisfactory`);
            $table->integer(`timeliness_very_satisfactory`);
            $table->integer(`timeliness_outstanding`);

            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('college_id');
            //`created_at` timestamp 
            //`updated_at` timestamp 
            //`deleted_at` timestamp 
            $table->integer('report_quarter');
            $table->integer('report_year');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extension_services');
    }
};
