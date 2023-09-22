<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            "user" => User::all()
        ]);
    }
}
