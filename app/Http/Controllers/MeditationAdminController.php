<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MeditationAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meditation.index', [
            "meditation" => Meditation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meditation.create',[
            "category" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'file' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
            'desc' => 'required',
            'category_id' => 'required'
        ]);
        
        $validated['file'] = $request->file('file')->store('audio-meditation');

        Meditation::create($validated);

        return redirect('/meditation');
    }

    /**
     * Display the specified resource.
     */
    public function show(Meditation $meditation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meditation $meditation)
    {
        return view('meditation.edit', [
            "meditation" => $meditation,
            "category" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meditation $meditation)
    {
        $validated = $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
            'desc' => 'required',
            'category_id' => 'required'
        ]);
        
        if($meditation->file!=null) {
            Storage::delete($meditation->file);
        }

        $validated['file'] = $request->file('file')->store('audio-meditation');


        Meditation::where('id', $meditation->id)->update($validated);

        return redirect('/meditation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meditation $meditation)
    {
        if($meditation->file) {
            Storage::delete($meditation->file);
        }

        Meditation::destroy($meditation->id);

        return redirect('/meditation');
    }
}
