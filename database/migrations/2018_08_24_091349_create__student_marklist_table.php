<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMarklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Marklist', function (Blueprint $table) {
            $table->increments('marks_id');
            $table->string('student_id');
            $table->string('physics');
            $table->string('chemistry');
            $table->string('maths');
            $table->string('cse');
            $table->string('total');
            $table->string('Grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Marklist');
    }
}
