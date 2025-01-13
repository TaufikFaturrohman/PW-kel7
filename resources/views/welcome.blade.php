@extends('layout.layouts')

@section('content')
<section id="hero" class="0px">
    <div class="container text-center text-white">
       <div class="hero-title">
        <div class="hero-text"> Selamat Datang <br> Di Sekolah Tinggi Teknologi Cipasung </div>
       </div>
    </div>
</section>
<section id="program" style="margin-top: -30px">
    <div class="container col-xxl-9">
        <div class="row">
            <div class="col-lg-3 col-md-6 col mb-2">
                <div class="bg-white rounded-3 p-3 mb-2 shadow justify-content-between d-flex align-items-center">
               
                    <div><p>Pendidikan <br> Berkualitas</p></div>
                    <img src="{{ asset('icon/icon-buku1.png') }}" height="55" width="55" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col mb-2">
            <div class="bg-white rounded-3 p-3 shadow mb-2 justify-content-between d-flex align-items-center">
           
                <div><p>Pendidikan <br> Berlakhlak</p></div>
                <img src="{{ asset('icon/icon-pendidikan.png') }}" height="55" width="55" alt="">
                </div>
            </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-white rounded-3 p-3 shadow mb-2justify-content-between d-flex align-items-center">
       
            <div><p>Pendidikan Muamalah</p></div>
            <img src="{{ asset('icon/icon-muamalat.png') }}" height="55" width="55" alt="">
            </div>
        </div>
  <div class="col-lg-3 col-md-6 col mb-2">
    <div class="bg-white rounded-3 p-3 shadow mb-2 justify-content-between d-flex align-items-center">
   
        <div><p>Pendidikan <br> Teknologi</p></div>
        <img src="{{ asset('icon/icon-tekno.jpg') }}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
     </div>
</section>
{{-- konten akhir --}}
<section id="berita" style="margin-top: 100px" class="py-5">

    <div class="container">
    <div class="header-berita text-center">
    <h2 class="fw-blod">Berita Kegiatan</h2>
    </div>
        <div class="row py-5">
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ ('images/img-berita/berita-wisudaa.jpeg') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                    <p class="text-secondary mb-3">21/04/2024</p>
                    <h4 class="fw-bold mb-3">Pelepasan Wisudawan dan Wisuda Wati</h4>
                    <p class="text-secondary">#sttcipasung</p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
                </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ ('images/img-berita/berita-beasiswa.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                    <p class="text-secondary mb-3">11/05/2024</p>
                    <h4 class="fw-bold mb-3">Penerimaan Beasiswa S1 Baznas</h4>
                    <p class="text-secondary">#sttcipasung</p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ ('images/img-berita/pengajian.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                        <p class="text-secondary mb-3">21/04/2024</p>
                        <h4 class="fw-bold mb-3">Pengajian Mingguan Mahasiswa</h4>
                        <p class="text-secondary">#sttcipasung</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                </div>

            <div class="footer-berita text-center">
                <a href="berita" class="btn btn-outline-danger">Berita Lainya</a>
            </div>
        </div>
    </section>
{{-- berita akhir --}}

{{-- join --}}
<section id="join" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                        <h5>Daftar Mahasiswa Baru</h5>
                </div>
                {{-- <form action="{{ route('pendaftaran.create') }}" method="POST"> --}}
                <h1 class="fw-bold mb-2">STT CIPASUNG   </h1>
                <p class="mb-3">Sekolah Tinggi Teknologi Cipasung (STT Cipasung) didirikan tahun 1997 dengan bantuan dan arahan dari tim Institut Teknologi Bandung. Sekolah tinggi ini didirikan untuk menjawab tantangan penyediaan tenaga ahli profesional dalam bidang keteknikan yang dibutuhkan oleh masyarakat.</p>
                <button class="btn btn-outline-danger">Daftar sekarang</button>
            </div>
            <div class="col-lg-6  rounded-3">
            <img src="{{ asset('images/belajar.jpg') }}" class="img-fluid" alt="">
             </div>
        </div>
    </div>
</section>
</form>

@endsection

   