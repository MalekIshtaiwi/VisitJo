<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceCategoryRequest;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(StoreServiceCategoryRequest $request)
    {
        // $validated = $request->validated();
        // ServiceCategory::create($validated);

        $categories = ServiceCategory::all();
        $category = new ServiceCategory();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index', compact('categories'))->with('success', 'Category added successfully.');
    }

    public function show(string $id)
    {
        // You can implement this if needed
    }

    public function edit(ServiceCategory $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, ServiceCategory $category)
    {

        $category->update($request->only('name', 'description'));

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(ServiceCategory $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
