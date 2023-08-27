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
        Schema::create('partnerships', function (Blueprint $table) {
            $table->id('id');
            $table->string('collab_nature', 255);
            $table->string('partnership_type', 255);
            $table->string('deliverable', 255);
            $table->string('name_of_partner', 255);
            $table->string('journal_publisher', 255);
            $table->string('title_of_partnership', 255);
            $table->string('beneficiaries', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('level');
            $table->string('name_of_contact_person', 255);
            $table->string('address_of_contact_person', 255);
            $table->string('telephone_number', 255);
            $table->string('description', 255);

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
        Schema::dropIfExists('partnerships');
    }
};
