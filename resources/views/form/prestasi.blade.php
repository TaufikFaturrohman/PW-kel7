@extends('layout.layouts')

@section('content')
<section style="margin-top:100px">
    <div class="container">
        <div style="margin-bottom: 400px">
<body>
    <div class="container mt-5">
        <h1 class="text-center">Prestasi Kampus</h1>
        <p class="text-center">Berikut adalah daftar prestasi yang telah diraih oleh kampus kami.</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juara 1 Lomba Debat Nasional</td>
                    <td>Nasional</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Medali Emas Olimpiade Matematika</td>
                    <td>Internasional</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Juara Umum Pekan Seni Mahasiswa</td>
                    <td>Regional</td>
                    <td>2021</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
        </div>
    </div>
</section>
@endsection
