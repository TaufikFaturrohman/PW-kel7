@extends('layout.layouts')

@section('content')
    {{-- berita --}}

    <section id="berita" style="margin-top: 100px" class="py-5">

        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-blod">Berita Kegiatan</h2>
            </div>
            <div class="row py-5">
                @foreach ($berita as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/berita/' . $item->gambar) }}" class="img-fluid mb-3"
                                alt="{{ $item->judul }}">
                            <div class="konten-berita">
                                <h4 class="fw-bold mb-3"> {{ Str::limit($item->judul) }}</h4>
                                <p class="text-secondary"> {{ Str::limit($item->konten, 50) }}</p>
                                <a href="{{ route('berita.show', $item->id) }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- berita akhir --}}
@endsection
