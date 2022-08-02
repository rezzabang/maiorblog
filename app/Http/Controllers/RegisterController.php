<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => "Register",
            "image" => "maior.png",
            "alt" => "Maior Medis",
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
        {
            $validatedData = $request->validate([

                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:20', 'unique:users'],
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:8|max:25'
            ]);

            // $validatedData['password'] = bcrypt($validatedData['password']);
            $validatedData['password'] = Hash::make($validatedData['password']);

            // $request->session()->flash('berhasil', 'Berhasil membuat akun! Silahkan Login');

            User::create($validatedData);

            return redirect('login')->with('berhasil', 'Berhasil membuat akun! Silahkan Login');
        }
    
}
