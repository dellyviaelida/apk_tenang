<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
    public function index(){
        return view('register', [
            "title" => "Registration"
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|alpha_dash|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:6',
            // 'gender' => 'required|in:male,female',
            // 'place_of_birth' => 'required',
            // 'date_of_birth' => 'required',
            // 'phone' => 'required',
            // 'address' => 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        User::create($validated);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan lakukan Login akun Anda');
    }

    // public function edit(User $user)
    // {
    //     return view('profile', [
    //         "title" => "Profile",
    //         "user" => $user
    //     ]);
        
    // }

    public function update(Request $request, User $user){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|alpha_dash|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        User::where('id', $user->id)->update($validated);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan lakukan Login akun Anda');
    }
}
