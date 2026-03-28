<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Home
    public function home()
    {
        $title = "Home - Nadila Ramadani";
        $nama = "Nadila Ramadani";
        return view('home', compact('title', 'nama'));
    }

    // Halaman Profil
    public function profil()
    {
        $title = "Profil - Nadila Ramadani";
        $nama = "Nadila Ramadani";
        $ttl = "Aur Kuning, 29 Oktober 2003";
        $hobi = "Bulu Tangkis, Voli, Nonton TikTok";
        $cita_cita = "Pengusaha Sukses";
        $status = "Mahasiswa UIN Bukittinggi";
        
        $pendidikan = [
            'SDN 18 Angge Palimbaktan',
            'SMP Negeri 1 Palupuh',
            'SMA Negeri 1 Palupuh',
            'UIN Bukittinggi (Sekarang)'
        ];
        
        $tentang = "Saya adalah Nadila Ramadani, lahir di Aur Kuning pada 29 Oktober 2003. Saya memiliki minat dalam berbagai aktivitas seperti bermain bulu tangkis, voli, serta menonton video di TikTok untuk hiburan dan menambah wawasan. Saya menyelesaikan pendidikan di SDN 18 Angge Palimbaktan, kemudian melanjutkan ke SMP Negeri 1 Palupuh dan SMA Negeri 1 Palupuh. Saat ini saya melanjutkan pendidikan di UIN Bukittinggi.";
        
        return view('profil', compact('title', 'nama', 'ttl', 'hobi', 'cita_cita', 'status', 'pendidikan', 'tentang'));
    }

    // Halaman Foto/Galeri
    public function foto()
    {
        $title = "Foto - Nadila Ramadani";
        
        $fotoSendiri = [
            ['id' => 1, 'caption' => 'Foto Selfie Lebaran 2024'],
            ['id' => 2, 'caption' => 'Momen Lebaran dengan Baju Baru'],
            ['id' => 3, 'caption' => 'Selfie di Masjid'],
        ];
        
        $fotoTeman = [
            ['id' => 4, 'caption' => 'Bersama Teman Ngabuburit'],
            ['id' => 5, 'caption' => 'Foto Bersama Sahabat'],
            ['id' => 6, 'caption' => 'Halal Bihalal dengan Teman'],
        ];
        
        $fotoKeluarga = [
            ['id' => 7, 'caption' => 'Foto Keluarga Besar'],
            ['id' => 8, 'caption' => 'Buka Puasa Bersama Keluarga'],
            ['id' => 9, 'caption' => 'Momen Silaturahmi'],
        ];
        
        return view('foto', compact('title', 'fotoSendiri', 'fotoTeman', 'fotoKeluarga'));
    }

    // Halaman Video
    public function video()
    {
        $title = "Video - Nadila Ramadani";
        
        $videos = [
            ['id' => 1, 'title' => 'Kegiatan Ramadhan', 'duration' => '2:30'],
            ['id' => 2, 'title' => 'Momen Takbiran', 'duration' => '3:15'],
            ['id' => 3, 'title' => 'Shalat Idul Fitri', 'duration' => '4:20'],
            ['id' => 4, 'title' => 'Silaturahmi', 'duration' => '2:45'],
            ['id' => 5, 'title' => 'Makan Bersama', 'duration' => '1:50'],
            ['id' => 6, 'title' => 'Pawai Obor', 'duration' => '3:30'],
        ];
        
        return view('video', compact('title', 'videos'));
    }

    // Halaman Cerita
    public function cerita()
    {
        $title = "Cerita - Nadila Ramadani";
        
        $cerita = [
            'tanggal' => '20 Maret 2026',
            'judul' => 'Pengalaman Idul Fitri Saya',
            'subjudul' => 'Hari yang penuh kebahagiaan dan kebersamaan',
            'isi' => 'Pada pagi hari Idul Fitri, saya bangun lebih awal dari biasanya. Suasana pagi terasa sangat tenang dan damai. Takbir terdengar dari masjid-masjid yang membuat hati terasa haru dan penuh rasa syukur. Saya dan keluarga bersiap untuk melaksanakan sholat Idul Fitri di masjid. Banyak orang berjalan menuju masjid dengan pakaian terbaik mereka. Semua saling tersenyum dan mengucapkan selamat hari raya. Setelah sholat, kami saling bersalaman dan memaafkan. Suasana penuh kebahagiaan terlihat dari wajah-wajah yang berseri-seri. Pulang dari masjid, kami berkumpul bersama keluarga besar. Ada ketupat, opor ayam, dan berbagai hidangan lezat lainnya. Kami bercerita dan tertawa bersama. Hari itu benar-benar menjadi momen yang tak terlupakan. Idul Fitri mengajarkan saya tentang pentingnya silaturahmi dan saling memaafkan. Semoga kebahagiaan ini selalu ada setiap tahunnya.'
        ];
        
        return view('cerita', compact('title', 'cerita'));
    }

    // Halaman Kontak
    public function kontak()
    {
        $title = "Kontak - Nadila Ramadani";
        
        $whatsapp = "+62 823-9040-0791";
        $email = "nadilaramadani@gmail.com";
        $instagram = "@nadila_ramadani";
        $alamat = "Aur Kuning, Sumatera Barat, Indonesia";
        
        return view('kontak', compact('title', 'whatsapp', 'email', 'instagram', 'alamat'));
    }
}