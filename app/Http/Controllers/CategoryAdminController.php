<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index', [
            "category" => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|file|image',
        ]);
        
        $validated['image'] = $request->file('image')->store('category-image');

        Category::create($validated);

        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return view('meditation', [
        //     "title" => $category->name,
        //     "meditation" => $category->meditation
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', [
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|file|image',
        ]);
        
        if($category->image!=null) {
            Storage::delete($category->image);
        }

        $validated['image'] = $request->file('image')->store('category-image');

        Category::where('id', $category->id)->update($validated);

        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image) {
            Storage::delete($category->image);
        }

        Category::destroy($category->id);

        return redirect('/category');
    }
}
