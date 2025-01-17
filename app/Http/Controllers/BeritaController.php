<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all(); // Ambil semua data berita dari database
        return view('berita', compact('berita')); // Kirim data ke view 'berita'
    }
    public function show($id)
    {
        $berita = Berita::findOrFail($id); // Ambil berita berdasarkan ID
        $beritaLainnya = Berita::where('id', '!=', $id)->take(3)->get(); // Ambil berita lain, kecuali berita saat ini
        return view('detail', compact('berita', 'beritaLainnya')); // Kirim data ke view 'detail'
    }
}
