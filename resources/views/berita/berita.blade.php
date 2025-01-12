@extends('layout.layouts')

@section('content')
    
{{-- berita --}}

<section id="berita" style="margin-top: 100px" class="py-5">

    <div class="container">
    <div class="header-berita text-center">
    <h2 class="fw-blod">Berita Kegiatan</h2>
    </div>
        <div class="row py-5">
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ ('images/img-berita/berita6.jpg') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                    <p class="text-secondary mb-3">21/04/2024</p>
                    <h4 class="fw-bold mb-3">Juara 1 Muaythai Kategori Pemula Beginner Senior  dan Juara 1 Beginner Senior Pada Event CIAMIS FIGHTING SERIES</h4>
                    <p class="text-secondary">#sttcipasung</p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
                </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ ('images/img-berita/berita7.jpg') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                    <p class="text-secondary mb-3">11/05/2024</p>
                    <h4 class="fw-bold mb-3">Peserta dan Capstone Terbaik Baparekraf Digital Talent </h4>
                    <p class="text-secondary">#sttcipasung</p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ ('images/img-berita/berita5.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                        <p class="text-secondary mb-3">21/04/2024</p>
                        <h4 class="fw-bold mb-3">Juara 1 Muaythai Kategori Pemula Beginner Senior  dan Juara 1 Beginner Senior Pada Event CIAMIS FIGHTING SERIES</h4>
                        <p class="text-secondary">#sttcipasung</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </section>
{{-- berita akhir --}}
@endsection