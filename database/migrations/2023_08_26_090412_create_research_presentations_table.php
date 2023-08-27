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
        Schema::create('research_presentations', function (Blueprint $table) {
            $table->id('id');
            $table->string('conference_title', 255);
            $table->string('organizer', 255);
            $table->string('venue', 255);
            $table->date('date_presented');
            $table->unsignedBigInteger('level');
            $table->text('description');
            $table->unsignedBigInteger('reseach_id');
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
        Schema::dropIfExists('research_presentations');
    }
};
