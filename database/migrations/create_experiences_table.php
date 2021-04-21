<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id');
            $table->string('institute_name');
            $table->string('role');
            $table->integer('years_of_experience');
            $table->timestamps();
        });
    }
}
