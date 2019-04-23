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
    public function __construct(Course $course, Lesson $lesson = null)
    {
        $this->course = $course;
        $this->lesson = $lesson;
    }

    public function passes($attribute, $value)
    {
        $lessons = collect($this->course->lessons);

        if ($this->lesson) {
            /** @var Lesson $lesson */
            $lessons->filter(function ($lesson) {
                return $lesson->id != $this->lesson->id;
            });
        }

        /** @var Lesson $lesson */
        foreach ($lessons as $lesson) {
            if (Lesson::query()
                ->where('course_id', $this->course->id)
                ->where('video_id', $value)
                ->where('video_id', '!=', $lesson->video->id)
                ->get()
                ->isNotEmpty())
            {
                return false;
            }
        }
        return true;
    }

    public function message()
    {
        return 'This video is already being used by another lesson in this course.';
    }
}
