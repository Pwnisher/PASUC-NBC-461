<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEqarFilesTable extends Migration
{
    public function up()
    {
        Schema::create('eqar_files', function (Blueprint $table) {
            $table->unsignedBigInteger('eqar_id')->primary();
            $table->string('user_user_id');
            $table->tinyInteger('is_approved');
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

    public function down()
    {
        Schema::dropIfExists('eqar_files');
    }
}
