<?php

namespace App\Rules;

use App\Course;
use App\Lesson;
use Illuminate\Contracts\Validation\Rule;

/**
 * @property Course course
 * @property Lesson lesson
 */
class DuplicateVideo implements Rule
{
    public function __construct(Course $course, Lesson $lesson)
    {
        $this->course = $course;
        $this->lesson = $lesson;
    }

    public function passes($attribute, $value)
    {
        return Lesson::query()
                ->where('course_id', $this->course->id)
                ->where('video_id', $value)
                ->where('video_id', '!=', $this->lesson->video->id)
                ->get()
                ->isEmpty() ? true : false;
    }

    public function message()
    {
        return 'This video is already being used by another lesson in this course.';
    }
}
