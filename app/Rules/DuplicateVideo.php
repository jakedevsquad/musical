<?php

namespace App\Rules;

use App\Course;
use App\Lesson;
use Illuminate\Contracts\Validation\Rule;

/**
 * @property Course course
 */
class DuplicateVideo implements Rule
{
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function passes($attribute, $value)
    {
        return Lesson::query()->
                where('course_id', $this->course->id)->
                where('video_id', $value)->get()->isEmpty() ? true : false;
    }

    public function message()
    {
        return 'This video is already being used by another lesson in this course.';
    }
}
