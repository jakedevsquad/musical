<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Resources\LessonResource;
use App\Lesson;
use App\Rules\DuplicateVideo;
use Illuminate\Http\Request;

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
        $attributes = request()->validate([
            'name'        => 'required|unique:lessons|min:3|max:64',
            'description' => 'max:1023',
            'video_id'       => ['required', 'exists:videos,id', new DuplicateVideo($course)]
        ]);
        $attributes['course_id'] = $course->id;

        Lesson::create($attributes);

        return $this->ok('Lesson Created!');
    }

    public function show(Lesson $lesson)
    {
        //
    }

    public function edit(Lesson $lesson)
    {
        return view('lesson.edit', [
            'lesson' => $lesson
        ]);
    }

    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return $this->ok('Lesson Deleted!');
    }


    public function lessonList(Course $course)
    {
        return LessonResource::collection($course->lessons)->jsonSerialize();
    }
}
