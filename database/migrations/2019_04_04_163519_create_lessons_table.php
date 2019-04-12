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
            $table->unsignedBigInteger('video_id');
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('courses');
            $table->foreign('video_id')
                ->references('id')
                ->on('videos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
