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
        Schema::create('references', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('level');
            $table->date('date_started');
            $table->date('date_completed');
            $table->string('title', 255);
            $table->string('authors_compilers', 255);
            $table->string('editor_name', 255);
            $table->string('editor_profession', 255);
            $table->integer('volume_no');
            $table->integer('issue_no');
            $table->date('date_published');
            $table->string('copyright_regi_no', 255);
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
        Schema::dropIfExists('references');
    }
};
