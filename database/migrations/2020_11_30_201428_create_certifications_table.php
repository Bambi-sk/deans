<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uni_logo');
            $table->string('uni_organization');
            $table->string('title');
            $table->string('paragraph');
            $table->string('main_part');
            $table->string('license');
            $table->integer('type_cerf_id')->unsigned();
            $table->timestamps();
            $table->foreign('type_cerf_id')->references('id')->on('cerf_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certifications');
    }
}
