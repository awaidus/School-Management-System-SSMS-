<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_student', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedinteger('student_id')->references('id')->on('students');;
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->timestamps();

            // $table->foreign('class_id')
            //     ->references('id')->on('classes')
            //     ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_student');
    }
}
