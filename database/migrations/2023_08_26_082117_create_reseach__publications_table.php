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
        Schema::create('reseach__publications', function (Blueprint $table) {
            $table->id('id');
            $table->string('publisher', 255);
            $table->string('journal_name', 255);
            $table->string('editor', 255);
            $table->unsignedBigInteger('level');
            $table->date('publish_date');
            $table->string('issn', 255);
            $table->string('page', 255);
            $table->string('volume', 255);
            $table->string('issue', 255);
            $table->unsignedBigInteger('indexing_platform');
            $table->text('description');
            $table->unsignedBigInteger('research_id');
            //`created_at` timestamp 
            //`updated_at` timestamp 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseach__publications');
    }
};
