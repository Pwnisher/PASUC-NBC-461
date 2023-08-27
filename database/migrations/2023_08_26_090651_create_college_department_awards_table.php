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
        Schema::create('college_department_awards', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_of_award', 255);
            $table->string('certifying_body', 255);
            $table->string('place', 255);
            $table->date('date');
            $table->unsignedBigInteger('level');
            $table->unsignedBigInteger('college_id');
            $table->unsignedBigInteger('department_id');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('college_department_awards');
    }
};
