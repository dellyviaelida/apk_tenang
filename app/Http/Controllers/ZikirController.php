<?php

namespace App\Http\Controllers;

use App\Models\Zikir;
use Illuminate\Http\Request;

class ZikirController extends Controller
{
    public function index(){
        return view('therapy-zikir', [
            "title" => "Zikir",
            "zikir" => Zikir::all()
        ]);
    }
}
