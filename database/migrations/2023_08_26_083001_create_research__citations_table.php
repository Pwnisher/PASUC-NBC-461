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
        Schema::create('research__citations', function (Blueprint $table) {
            $table->id('id');
            $table->string('research_code', 255);
            $table->string('article_title', 255);
            $table->string('article_author', 255);
            $table->string('journal_title', 255);
            $table->string('journal_publisher', 255);
            $table->string('volume', 255);
            $table->string('issue', 255);
            $table->string('page', 255);
            $table->integer('year');
            $table->unsignedBigInteger('indexing_platform');
            $table->text('description');
            $table->unsignedBigInteger('research_id');
            //`created_at` timestamp 
            //`updated_at` timestamp 
            //`deleted_at` timestamp 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research__citations');
    }
};
