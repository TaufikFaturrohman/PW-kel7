<nav class="navbar navbar-expand-lg navbar-secondary py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <img src="{{ ('images/logosttc2.png') }}" alt="" height="40" width="40">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Prodi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Kontak</a>
          </li>
          <div class="dropdown">
            <a class="btn btn- dropdown-toggle" href="#"  data-bs-toggle="dropdown" aria-expanded="false">
              Fasilitas
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Mesjid</a></li>
              <li><a class="dropdown-item" href="#"></a>Perpustakaan</li>
              <li><a class="dropdown-item" href="#">Labkomputer</a></li>
            </ul>
          </div>
        </ul>
     
        <div class="d-flex">
          <button class="btn btn-outline-danger">Register</button>
        </div>
      </div>
    </div>
  </nav>