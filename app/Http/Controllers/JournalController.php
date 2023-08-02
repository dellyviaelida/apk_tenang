<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index(){
        return view('admin.data-journal', [
            "journal" => Journal::with(['user'])->get()
        ]);
    }

    // public function show(){
    //     return view('history-journal');
    // }
}
