@extends('layout.layouts')

@section('content')
<section style="margin-top:100px">
    <div class="container py-5">
        <div style="margin-bottom: 200px">
<body>
    <div class="container mt-2">
        <h1 class="text-center">Daftar Program Studi</h1>
        <table class="table table-bordered mt-4">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Program Studi</th>
                    <th>Keterangan</th>
                    <th>Foto</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Teknik Informatika</td>
                    <td>Mempelajari berbagai hal yang terkait dengan teknologi komputer dan informasi.Menguasai berbagai bahasa pemrograman untuk membuat aplikasi, software, atau sistem yang dapat digunakan dalam berbagai bidang, seperti web, mobile, desktop, dan lainnya.</td>
                    <td><img src="{{ ('images/program.jpg') }}" height="300px" width="400px" alt=""></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Teknik Industri</td>
                    <td>adalah salah satu cabang ilmu teknik yang memfokuskan pada perancangan, pengelolaan, dan perbaikan sistem yang melibatkan manusia, mesin, material, informasi, dan energi. </td>
                    <td><img src="{{ ('images/industri.jpeg') }}" height="300px" width="400px" alt=""></td>
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