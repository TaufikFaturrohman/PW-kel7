<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    // Menampilkan Form Pendaftaran
    public function create()
    {
        return view('registration');
    }

    // Menyimpan Data Pendaftaran
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'no_hp' => 'required|numeric',
            'email' => 'required|email|unique:registrations,email',
            'alamat' => 'required|string|max:500',
            'tempat_lahir' => 'required|string|max:500',
            'asal_sekolah' => 'required|string|max:500',
        ]);

        Registration::create($validated);

        return redirect('/pendaftaran')->back()->with('success', 'Pendaftaran berhasil!');
    }
}
