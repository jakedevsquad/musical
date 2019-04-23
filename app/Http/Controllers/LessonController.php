<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Resources\LessonResource;
use App\Lesson;
use App\Rules\DuplicateVideo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LessonController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Course $course)
    {
        return view('lesson.create', [
            'course' => $course
        ]);
    }

    public function store(Course $course)
    {
        $attributes              = request()->validate([
            'name'        => 'required|unique:lessons|min:3|max:64',
            'description' => 'max:1023',
            'video_id'    => ['required', 'exists:videos,id', new DuplicateVideo($course)],
        ]);
        $attributes['course_id'] = $course->id;
        $attributes['order'] = $course->getNextLessonOrderNumber();

        Lesson::create($attributes);

        return $this->ok('Lesson Created!');
    }

    public function show(Lesson $lesson)
    {
        //
    }

    public function edit(Course $course, Lesson $lesson)
    {
        return view('lesson.edit', [
            'course' => $course,
            'lesson' => $lesson
        ]);
    }

    public function update(Course $course, Lesson $lesson)
    {
        $attributes              = request()->validate([
            'name'        => ['required', 'min:3', 'max:64', Rule::unique('lessons')->ignore($lesson)],
            'description' => 'max:1023',
            'video_id'    => ['required', 'exists:videos,id', new DuplicateVideo($course, $lesson)]
        ]);
        $attributes['course_id'] = $course->id;

        $lesson->update($attributes);

        return $this->ok('Lesson Created!');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return $this->ok('Lesson Deleted!');
    }


    public function lessonList(Course $course)
    {
        return LessonResource::collection($course->lessons()->orderBy('order')->get())->jsonSerialize();
    }

    public function lessonOrder()
    {
        $lessons = request('lessons');
        $count = 1;
        /** @var Lesson $lesson */
        foreach ($lessons as $lesson) {
            $lesson = Lesson::find($lesson['id']);
            $lesson->order = $count;
            $lesson->save();
            $count++;
        }

        return $this->ok('Lessons Re-ordered!');
    }
}
