<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (){
        return view('category-meditation', [
            "title" => "Category Meditation",
            "category" => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('meditation', [
            "title" => $category->name,
            "meditation" => $category->meditation
        ]);
    }
}
