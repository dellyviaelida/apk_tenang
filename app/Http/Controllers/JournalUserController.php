<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('journal.index', [
            "title" => "History Journal",
            "journal" => Journal::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journal.create', [
            "title" => "Journal",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        $validated['user_id'] = auth()->user()->id;

        Journal::create($validated);

        return redirect('/journal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        return view('journal.show', [
            "title" => "Detail Journal",
            "journal" => $journal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journal $journal)
    {
        return view('journal.edit', [
            "title" => "Edit Journal",
            "journal" => $journal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journal $journal)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        $validated['user_id'] = auth()->user()->id;

        Journal::where('id', $journal->id)->update($validated);

        return redirect('/journal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        Journal::destroy($journal->id);

        return redirect('/journal');
    }
}
