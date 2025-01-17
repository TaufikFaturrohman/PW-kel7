<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>STT CIPASUNG</title>
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ ('icon/icon.ico') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>

    {{-- navbar --}}
@include('layout.navbar')
     
    {{-- Content --}}

    @yield('content')

    
    
    {{-- footer --}}
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                {{-- kol 1 navsigasi --}}
                <div class="row">
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="berita" class="nav-link p-0 text-muted">
                                    Berita Kampus</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                    Kegiatan Mahasiswa</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                    FAQ</a>
                                </li>
                                <li class="nav-item mb-2"><a href="https://sttcipasung.ac.id/" class="nav-link p-0 text-muted">
                                    About Us</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                    Alumni</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                    Prestasi</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                    Kegiatan</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                    Informasi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- kol 2 medsos --}}
                    <div class="col-12 col-md-2 mb-5">
                        <h5 class="fw-bold">Follow Kami</h5>
                        <div class="d-flex mb-3">
                            <a href="
https://www.youtube.com/channel/UCfMqh9VkAU2q_C-fPNKksiQ" target="_blank" class="text-decoration-none text-dark" >
                            <img src="{{ asset('icon/icon-yt.png') }}" height="30" width="30" class="me-4" alt=""></a>
                            <a href="https://www.facebook.com/sttcipasung/?locale=id_ID" target="_blank" class="text-decoration-none text-dark" >
                            <img src="{{ asset('icon/icon-fb.png') }}" height="30" width="30" class="me-4" alt=""></a>
                            <a href="https://www.instagram.com/sttcipasung_official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="text-decoration-none text-dark" >
                            <img src="{{ asset('icon/icon-ig.webp') }}" height="30" width="30" class="me-4" alt=""></a>
                        </div>
                  </div>
                  {{-- kol 3 kontak --}}
                  <div class="col-12 col-md-3 mb-3">
                    <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                    <div class="nav flex-column">
                        <ul class="nav flex-column me-5">
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                info@sttcipasung.ac.id</a>
                            </li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                (0265) 2550424</a>
                            </li>
                        </ul>
                    </div>
                  </div>
                    {{-- kol alamat --}}
                  <div class="col-12 col-md-3 mb-3">
                    <h5 class="font-inter fw-bold mb-3">Alamat</h5>
                    <p>
                        Jalan Raya Cisinga Km. 1, Cilampunghilir, Padakembang, Tasikmalaya, Indonesia, West Java
                        </p>
                     </div>
                </div>
            </footer>
        </div>
    </section>
    {{-- footer --}}

    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    Sekolah Tinggi Teknologi Cipasung   
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p>
                        <a href="" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- aos anim --}}


    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100){
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("nabvar-dark");
            } else {
                navbar.classList.remove("scroll-nav-actiive");
                navbar.classList.add("nabvar-dark");
            }
        };
    </script>
  </body>
  </html>