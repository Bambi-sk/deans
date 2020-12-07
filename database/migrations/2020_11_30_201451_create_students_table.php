<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->date('birthdate');
            $table->integer('id_nation')->unsigned();
            $table->integer('id_stream')->unsigned();
            $table->integer('id_spec')->unsigned();
            $table->integer('id_type_study')->unsigned();
            $table->unsignedBigInteger('id_users');
            $table->timestamps();
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_nation')->references('id')->on('nationalities')->onDelete('cascade');
            $table->foreign('id_stream')->references('id')->on('streams')->onDelete('cascade');
            $table->foreign('id_type_study')->references('id')->on('type_studies')->onDelete('cascade');
            $table->foreign('id_spec')->references('id')->on('specialities')->onDelete('cascade');

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
