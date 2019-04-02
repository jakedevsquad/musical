<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function show(Category $category)
    {
        return view('category.show', [
            'category' => Category::find($category->id)
        ]);
    }

    public function edit(Category $category)
    {
        return view('category.edit', [
            'category' => Category::find($category->id)
        ]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name'        => ['required','min:3','max:64', Rule::unique('categories')->ignore($category->id)],
        ]);

        $category->update($attributes);

        return $this->ok('Category Updated!');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return $this->ok('Category Deleted!');
    }
}
