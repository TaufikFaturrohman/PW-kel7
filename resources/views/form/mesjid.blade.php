@extends('layout.layouts')

@section('content')
<section style="margin-top:100px">
    <div class="container">
        <div style="margin-bottom: 300px">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesjid Kampus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Mesjid Kampus</h1>
        <p class="text-center">Mesjid kampus kami menyediakan tempat yang nyaman untuk ibadah dan kegiatan keagamaan.</p>
        <div class="card mt-4">
            <img src="{{ ('images/mesjid.jpg') }}" class="card-img-top" alt="Mesjid Kampus">
            <div class="card-body">
                <h5 class="card-title">Mesjid Al-Jami</h5>
                <p class="card-text">
                    Mesjid Al-Jami adalah pusat kegiatan keagamaan di kampus, dengan fasilitas wudhu, ruang ibadah yang luas, dan jadwal kajian rutin. adalah tempat sujud. Adapun secara syar’i, mesjid adalah tempat yang dipersiapkan untuk digunakan shalat lima waktu secara berjamaah oleh kaum muslimin.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
        </div>
    </div>
</section>

@endsection
