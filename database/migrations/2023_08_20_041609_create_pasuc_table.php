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
        Schema::create('pasuc_files', function (Blueprint $table) {
            $table->id('pasuc_id');
            $table->integer('kra');
            $table->char('criteria', 1);
            $table->unsignedBigInteger('eqar_files_eqar_id');
            $table->string('eqar_files_user_user_id');
            $table->string('eval_status', 45);
            $table->tinyInteger('is_submitted');

            $table->foreign('eqar_files_eqar_id')->references('eqar_id')->on('eqar_files')
            ->onDelete('NO ACTION')->onUpdate('NO ACTION');
             $table->foreign('eqar_files_user_user_id')->references('user_user_id')->on('eqar_files')
            ->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasuc');
    }
};
