<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'konten', 'gambar', 'tanggal_publikasi'];
    protected $cast = ['tanggal_publikasi' => 'datetime'];
}