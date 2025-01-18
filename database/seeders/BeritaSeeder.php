<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        Berita::create([
            'judul' => 'Kuliah Perdana Semester Genap Tahun Akademik 2025',
            'konten' => 'Cipasung, 15 Januari 2025 STT Cipasung resmi memulai perkuliahan semester genap tahun akademik 2024/2025 pada Senin, 15 Januari 2025.
            Kegiatan ini diawali dengan acara pembukaan di aula kampus yang dihadiri oleh seluruh civitas akademika, termasuk mahasiswa dari berbagai angkatan.
            Dalam sambutannya, Ketua STT Cipasung, menyampaikan pentingnya memanfaatkan semester ini sebagai momentum untuk meningkatkan prestasi akademik.
            “Semester baru adalah peluang baru. Jadikan setiap tantangan sebagai motivasi untuk terus belajar dan berkembang,” ungkapnya.
            Acara pembukaan kuliah perdana juga diisi dengan kuliah umum bertema "Inovasi Teknologi di Era Digital:
            Tantangan dan Peluang" yang disampaikan oleh Dr. Ir. Hadi Pratama, seorang pakar teknologi informasi.
            Kuliah ini memberikan wawasan bagi mahasiswa tentang pentingnya beradaptasi dengan perkembangan teknologi dalam dunia profesional.
            Semangat dan antusiasme terlihat jelas dari para mahasiswa yang siap menghadapi semester genap dengan optimisme.
            Diharapkan, semester ini menjadi momen untuk meraih capaian yang lebih baik di bidang akademik maupun non-akademik.',
            'gambar' => 'kuliah.jpg',
            'tanggal_publikasi' => now(),
        ]);
        Berita::create([
            'judul' => 'Alumni STT Cipasung Meraih Penghargaan sebagai Peserta dan Capstone Terbaik Baparekraf Digital Talent',
            'konten' => 'Pada Hari Minggu Tanggal 06 Oktober 2024 H. Sandiaga Salahuddin Uno, B.B.A., M.B.A. 
            dari Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) mengundang para talenta digital dari berbagai bidang teknologi
            untuk menghadiri acara Baparekraf Developer Day (BDD) 2024, yang kali ini kembali diselenggarakan secara offline di Kota Yogyakarta,
            Daerah Istimewa Yogyakarta sekaligus penyerahan simbolis peserta dan capstone terbaik Baparekraf Digital Talent.',
            'gambar' => 'baparekraf.jpg',
            'tanggal_publikasi' => now(),
        ]);
        Berita::create([
            'judul' => 'Wisuda Angkatan 2020 Sekolah Timggi Teknologi Cipasung',
            'konten' => 'Pada hari rabu tanggal 25 September 2024, Sekolah Tinggi Teknologi Cipasung telah sukses melaksanakan acara Wisuda angkatan 2020. 
            Momen bersejarah ini dihadiri oleh pembina STT Cipasung Drs. Kh. Abdul Chobir, M.T, Ketua senat STT Cipasung Dra. Neng Ida Nurhalida, M.Pd, 
            Ketua STT Cipasung Ahmad Zamakhsyari Sidiq, M.T. selain itu dihadiri oleh Para dosen dan staf TU STT Cipasung.
            Alhamdulillah acara tersebut berjalan dengan khidmat yang dipenuhi dengan kegembiraan dan haru, dengan adanya prosesi pemindahan kucir dan sambutan inspiratif dari para pembicara',
            'gambar' => 'wisuda.jpg',
            'tanggal_publikasi' => now(),
        ]);
        Berita::create([
            'judul' => 'Pembinaan dan Penyerahan SK Beasiswa S1 Baznas',
            'konten' => 'Hari Sabtu (07/09/2024)  Baznas melakukan pembinaan dan penyerahan sk penerima beasiswa s1 baznas se kabupaten tasikmalaya
            di aula sekolah tinggi teknologi cipasung. Ada 12 kampus yang terdata sebagai penerima beasiswa s1 baznas di kabupaten tasikmalaya.
            salah satunya adalah sekolah tinggi teknologi cipasung dengan jumlah peserta yang lolos 6 orang, 5 mahasiswa jurusan Informatika dan 1 jurusan Teknik Industri.
            Sekolah Tinggi Teknologi Cipasung bekerja sama dengan Baznas dalam wujud niat untuk mengembangkan SDM yang berkualitas di masa depan. 
            Sebanyak 6 (enam) mahasiswa STT Cipasung mendapat bantuan dana studi. Acara serah terima dana bantuan pendidikan ini berlangsung di Aula Sekolah Tinggi Teknologi Cipasung.
            Turut hadir dalam acara serah terima yakni, Sekretaris Yayasan Cipasung sekaligus pembina STT Cipasung, Drs. Abdul Chobir, M.T.,
            Perwakilan Ketua Baznas Kabupaten Tasikmalaya, Sekretaris Daerah Kab. Tasikmalaya, Muhammad Zein,  Ketua Baznas Provinsi Jawa Tengah K.H.
            Ahmad Darodji beserta jajarannya, dan mahasiswa penerima beasiswa',
            'gambar' => 'baznas.png',
            'tanggal_publikasi' => now(),
        ]);
        Berita::create([
            'judul' => 'Seminar Teknologi; Handle of Rapid Flow Technology',
            'konten' => '(6/09/2023) -Sekolah Tinggi Teknologi Cipasung (STTC) sedang melaksanakan kegiatan kuliah ta’aruf mahasiswa baru (KTMB) untuk mahasiswa baru pada tanggal 4-8 September 2023.
            Dalam rangkaian acara KTMB, ada salah satu kegiatan yang menarik, yaitu seminar teknologi dengan tema, “Handle of Rapid Flow Technology.” 
            Seminar ini akan membuka wawasan mahasiswa baru tentang perkembangan terbaru dalam teknologi dan bagaimana teknologi memengaruhi berbagai aspek kehidupan kita,
            termasuk pendidikan.Seminar ini akan menjadi sarana penting bagi mahasiswa baru STT Cipasung untuk mengenal lebih dalam potensi teknologi dan dampaknya di masa depan.
            Dalam acara ini, di moderatori oleh Haerul Pebriyansah (mahasiswa Informatika) dengan pemateri yang sudah tidak diragukan lagi pemahaman dan pengalamannya dalam dunia Teknologi,
            yakni Arief Suseno  (Education Lead at Microsoft Indonesia dan x-VP Lintasarta, Samsung Indonesia ) beliau akan berbagi pengetahuan dan pengalaman dalam menghadapi perubahan teknologi,
            terutama dalam konteks pendidikan.Teknologi telah menjadi bagian integral dari kehidupan kita, termasuk pendidikan dan bisnis. Dan harapannya generasi milenial ataupun zilenial
            saat ini dapat memahami lebih dalam tentang bagaimana teknologi memengaruhi berbagai aspek kehidupan mereka, serta peluang dan tantangan yang mungkin mereka hadapi dimasa depan,
            khususnya bagi mahasiswa STT Cipasung, setelah mengikuti seminar ini dapat mempunyai insight baru dan menjadi lebih termotivasi dalam mengembangkan dirinya.',
            'gambar' => 'rapid.jpeg',
            'tanggal_publikasi' => now(),
        ]);
        Berita::create([
            'judul' => 'Seminar Kewirausahaan; Entrepreneurship Acceleration ',
            'konten' => '(Rabu, 06/09/2023) – Sekolah Tinggi Teknologi Cipasung mengadakan acara seminar pada hari Rabu 06 September 2023, 
            dimana acara ini merupakan Salah satu seminar yang menarik perhatian mahasiswa baru adalah seminar kewirausahaan dengan mengusung tema
            “Entrepreneurship Acceleration”. Seminar ini bertujuan untuk memberikan wawasan mendalam tentang dunia kewirausahaan dan
            cara mempercepat kesuksesan sebagai seorang entrepreneur di usia muda.Dalam kegiatan seminar “Entrepreneurship Acceleration” ini sangat penting
            bagi para mahasiswa Sekolah Tinggi Teknologi Cipasung, karena dalam pandangan dunia saat ini kewirausahaan telah menjadi pilar dan sorotan utama dalam pertumbuhan ekonomi di Indonesia.
            Dengan menghadiri seminar ini, mahasiswa baru STTC akan memiliki kesempatan besar untuk belajar dari para pemateri yang memiliki pengalaman praktis dalam memulai dan mengelola bisnis kecil hingga bisnis besar
            seperti yang narasumber jalankan. Para mahasiswa juga mendapatkan wawasan tentang perkembangan terbaru di dunia kewirausahaan,
            terutama dalam era digital yang terus berkembang pesat dan berubah sangat cepat.',
            'gambar' => 'kwu.jpeg',
            'tanggal_publikasi' => now(),
        ]);
    }
}
