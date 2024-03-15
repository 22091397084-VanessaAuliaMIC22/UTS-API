<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);

        // Simpan data ke dalam database
        User::create($request->all());

        // Redirect ke halaman yang sesuai
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Definisikan metode lain seperti show, edit, update, dan destroy sesuai kebutuhan Anda
}
