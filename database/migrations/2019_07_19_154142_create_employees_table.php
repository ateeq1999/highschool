<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('employee_note');
            $table->string('jobe_title');
            $table->date('hirring_date');
            $table->string('jobe_type');
            $table->string('jobe_description');
            $table->string('experince_year');
            $table->string('jobe_note');
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
        Schema::dropIfExists('employees');
    }
}
