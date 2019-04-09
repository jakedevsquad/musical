<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('courses');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
