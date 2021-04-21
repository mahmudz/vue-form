<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id');
            $table->string('institute_name');
            $table->string('degree');
            $table->integer('passing_year');
            $table->timestamps();
        });
    }
}
