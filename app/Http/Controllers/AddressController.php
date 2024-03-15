<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('addresses.index', compact('addresses'));
    }

    public function create()
    {
        return view('addresses.create');
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        // Simpan data ke dalam database
        Address::create($request->all());

        // Redirect ke halaman yang sesuai
        return redirect()->route('addresses.index')->with('success', 'Address created successfully.');
    }

    // Definisikan metode lain seperti show, edit, update, dan destroy sesuai kebutuhan Anda
}
