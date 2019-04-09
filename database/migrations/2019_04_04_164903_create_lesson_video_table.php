<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonVideoTable extends Migration
{
    public function up()
    {
        Schema::create('lesson_video', function (Blueprint $table) {
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('video_id');


            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons');

            $table->foreign('video_id')
                ->references('id')
                ->on('videos');

            $table->unique(['lesson_id', 'video_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons_videos');
    }
}
