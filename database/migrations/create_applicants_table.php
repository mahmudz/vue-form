<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('nid');
            $table->string('nid_image_front')->nullable();
            $table->string('nid_image_back')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }
}
