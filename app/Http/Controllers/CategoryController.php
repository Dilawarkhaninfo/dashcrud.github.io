<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:60',
        ]);
        $cateogry = new Category();
        $cateogry->name = $request->name;
        $cateogry->save();
        return redirect()->route('category.index')->with('success', 'Category Added Successfuly!');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }
    public function update($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category Updated Successfuly!');
    }
    public function delete($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category Deleted Successfuly!');
    }
}
