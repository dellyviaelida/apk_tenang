<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use Illuminate\Http\Request;

class MeditationController extends Controller
{
    public function index()
    {
        return view('meditation', [
            "title" => "Detail Meditation",
            "meditation" => Meditation::all()
        ]);
    }

    public function show(Meditation $meditation)
    {
        return view('detail-meditation', [
            "title" => "Detail Meditation",
            "meditation" => $meditation
        ]);

        // return view('detail-meditation', [
        //     "title" => $category->name,
        //     "meditation" => $category->meditation
        // ]);
    }
}
