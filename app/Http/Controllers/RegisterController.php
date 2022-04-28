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
            "title" => 'Regiter',
            "active" => 'register'
        ]);
    }

    public function store(Request $request)
    {
        //validasi data
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=> ['required', 'min:4', 'max:255', 'unique:users'],
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
        //hash pasword
        // $validateData['password'] = bcrypt($validateData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        //kirim flash data buat alert
        // $request->session()->flash('success', ' Registration Successfully! Please Kogin');

        return redirect('/login')->with('success', ' Registration Successfully! Please Kogin');
    }
}
