<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $filter = request('filter');
        if ($filter) {
            $filter = '%' . $filter . '%';
            $query  = Course::query()->where('name', 'like', $filter)->orderBy('name');
            $videos = $query->paginate(10);
        } else {
            $videos = Course::orderBy('name')->paginate(10);
        }

        return view('course.index', [
            'courses' => $videos,
            'filter'     => request('filter')
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        //
    }
}
