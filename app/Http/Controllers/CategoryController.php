<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $filter = request('filter');
        if ($filter) {
            $filter = '%' . $filter . '%';
            $query  = Category::query()->where('name', 'like', $filter)->orderBy('name');
            $videos = $query->paginate(10);
        } else {
            $videos = Category::orderBy('name')->paginate(10);
        }

        return view('category.index', [
            'categories' => $videos,
            'filter' => request('filter')
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'        => 'required|unique:categories|min:3|max:64',
        ]);

        Category::create($attributes);

        return $this->ok('Category Created!');
    }

    public function show($id)
    {
        return view('category.show', [
            'category' => Category::find($id)
        ]);
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
