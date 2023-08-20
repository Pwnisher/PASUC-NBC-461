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
        Schema::create('eqar_files', function (Blueprint $table) {
            $table->id('eqar_id');
            $table->string('user_user_id');
            $table->tinyInteger('is_applied');
            $table->string('file_path')->nullable();
            $table->string('title');
            $table->date('inclusive_date');
            $table->string('accomplishment_name');
            $table->string('department_section');
            $table->string('qar_type');
            $table->date('date_submitted');
            $table->string('status')->nullable();

            $table->foreign('user_user_id')->references('user_id')->on('users')
                  ->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eqar');
    }
};
