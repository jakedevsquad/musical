<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Http\Resources\CourseResource;
use App\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $filter = request('filter');
        if ($filter) {
            $filter  = '%' . $filter . '%';
            $query   = Course::query()->where('name', 'like', $filter)->orderBy('name');
            $courses = $query->paginate(10);
        } else {
            $courses = Course::orderBy('name')->paginate(10);
        }

        return view('course.index', [
            'courses' => $courses,
            'filter'  => request('filter')
        ]);
    }

    public function create()
    {
        return view('course.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'        => 'required|unique:courses|min:3|max:64',
            'category_id' => 'required|exists:categories,id'
        ]);

        Course::create($attributes);

        return $this->ok('Course Created!');
    }

    public function show(Course $course)
    {
        return view('course.show', [
            'course' => CourseResource::make($course)->jsonSerialize(),
        ]);
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        //
    }

    public function lessonList(Course $course)
    {
        return $course->lessons;
    }

    public function destroyLesson(Lesson $lesson)
    {
        $lesson->delete();

        return $this->ok('Lesson Deleted!');
    }

    public function createLesson(Course $course)
    {
        return view('lesson.create', [
            'course' => $course
        ]);
    }

    public function addLesson()
    {
        return $this->ok('Lesson Created!');
    }
}
