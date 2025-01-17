@extends('layout.layouts')

@section('content')
    {{-- Detail Berita --}}
    <section id="detail-berita" style="margin-top: 100px" class="py-5">
        <div class="container">
            <div class="header-detail text-center">
                <h2 class="fw-bold">{{ $berita->judul }}</h2>
            </div>
            <div class="row py-4">
                <div class="col-lg-8 mx-auto">
                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="img-fluid mb-4" alt="{{ $berita->judul }}">
                    <div class="konten-detail">
                        <p class="text-secondary">{!! $berita->konten !!}</p>
                    </div>
                </div>
            </div>

            <div class="header-berita-lain text-center mt-5">
                <h3 class="fw-bold">Berita Lainnya</h3>
            </div>
            <div class="row py-4">
                @foreach ($beritaLainnya as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/berita/' . $item->gambar) }}" class="img-fluid mb-3"
                                alt="{{ $item->judul }}">
                            <div class="konten-berita">
                                <h4 class="fw-bold mb-3">{{ Str::limit($item->judul, 50) }}</h4>
                                <p class="text-secondary">{{ Str::limit($item->konten, 50) }}</p>
                                <a href="{{ route('berita.show', $item->id) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Detail Berita Akhir --}}
@endsection
