<?php

namespace App\Http\Controllers;

use App\Models\Zikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ZikirAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('zikir.index', [
            "zikir" => Zikir::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('zikir.create');
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
        ]);
        
        $validated['file'] = $request->file('file')->store('audio-zikir');
        Zikir::create($validated);

        return redirect('/zikir');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zikir $zikir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zikir $zikir)
    {
        return view('zikir.edit', [
            "zikir" => $zikir
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zikir $zikir)
    {
        $validated = $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
            'desc' => 'required',
        ]);
        
        if($zikir->file!=null) {
            Storage::delete($zikir->file);
        }

        $validated['file'] = $request->file('file')->store('audio-zikir');

        Zikir::where('id', $zikir->id)->update($validated);

        return redirect('/zikir');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zikir $zikir)
    {
        if($zikir->file) {
            Storage::delete($zikir->file);
        }

        Zikir::destroy($zikir->id);

        return redirect('/zikir');
    }
}
