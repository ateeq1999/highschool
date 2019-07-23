<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('notes_about_student');
            $table->string('birth_date');
            $table->string('studay_year');
            $table->string('year_of_study');
            $table->string('spcial_desises')->default('لايوجد');
            $table->string('spcial_case');
            $table->string('responser_full_name');
            $table->string('responser_phone');
            $table->string('responser_email');
            $table->string('responser_jobe');
            $table->string('responser_address');
            $table->string('responser_relation');
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
        Schema::dropIfExists('students');
    }
}
