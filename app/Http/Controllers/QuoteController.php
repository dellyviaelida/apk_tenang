<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Home",
            "quote" => Quote::all()
        ]);
    }

}
