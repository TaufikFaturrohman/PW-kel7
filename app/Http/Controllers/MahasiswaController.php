<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController
{
   function mahasiswa(){
    $mahasiswas = Mahasiswa::all();
    return view('form.form-daftar',compact('mahasiswas'));
   }
}
