<?php

namespace App\Http\Controllers;

use App\Course;

class CatalogController extends Controller
{
    public function index()
    {
        $name_filter     = request('name_filter');
        $category_filter = request('category_filter');

        if ($name_filter && !$category_filter) {
            $name_filter = '%' . $name_filter . '%';
            $query       = Course::query()->where('name', 'like', $name_filter)->orderBy('name');
            $courses     = $query->paginate(10);
        } else if (!$name_filter && $category_filter) {
            $query   = Course::query()->where('category_id', '=', $category_filter)->orderBy('name');
            $courses = $query->paginate(10);
        } else if ($name_filter && $category_filter) {
            $name_filter = '%' . $name_filter . '%';
            $query       = Course::query()
                ->where('name', 'like', $name_filter)
                ->where('category_id', '=', $category_filter)
                ->orderBy('name');
            $courses     = $query->paginate(10);
        } else {
            $courses = Course::orderBy('name')->paginate(10);
        }

        return view('catalog.index', [
            'courses'      => $courses,
            'name_filter'     => request('name_filter'),
            'category_filter' => request('category_filter')
        ]);
    }
}
