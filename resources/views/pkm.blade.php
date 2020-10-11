<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HOME ID-->
    <meta charset="UTF-8">
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PKM FPIK IPB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.css">
    <link rel="stylesheet" href="{{asset('frontend/css/above-the-fold-2.css')}}">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/ic_bg/favicon_ipb.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style-custom-1.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/fcd3b17c/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/40e49d64/pager.css')}}">
</head>

<body>
    <!-- HEADER -->
    <header id="header" class=" header-fancy">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand fixed">
                <img src="{{ asset('frontend/photo/logo/logo+fpik+putih.png')}}" alt="Fakultas Perikanan" class="img-responsive">
                <!-- <span>FPIK - IPB University</span> -->
            </a>
            <!-- <a href="index.html" class="navbar-brand scrolling">
                <img src="photo/logo/logo FPIK Terbaru.jpeg" alt="Fakultas Perikanan" class="img-responsive">
            </a> -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="container">
            <nav id="navbar" class="navbar navbar-collapse navbar-default navbar-right collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li class=" nav-item dropdown mega-menu">
                        <a id="megamenu" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">
                            <i class="fa fa-comment"></i> PROFIL
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container" style="width: max-content;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 class=" font-weight-bold">Profil</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="{{ url('/sejarah') }}" class="nav-link">Sejarah</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/visi-misi') }}" class="nav-link">Visi & Misi</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/struktur') }}" class="nav-link">Struktur</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/pimpinan') }}" class="nav-link">Pimpinan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/proker-restra') }}" class="nav-link">Program kerja & restra</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/senat') }}" class="nav-link">Senat</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://simaker.ipb.ac.id" class="nav-link">SIMAKER</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold">Fasilitas</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="ifmos-pelabuhanratu.html" class="nav-link">IFMOS Pelabuhanratu</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ifmos-ancol.html" class="nav-link">IFMOS Ancol</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold">Departemen</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="https://bdp.fpik.ipb.ac.id" class="nav-link">Departemen Budidaya Perairan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://msp.fpik.ipb.ac.id" class="nav-link">Departemen Manajemen Sumberdaya Perairan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://thp.ipb.ac.id" class="nav-link">Departemen Teknologi Hasil Perairan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://psp.fpik.ipb.ac.id" class="nav-link">Departemen Pemanfaatan Sumberdaya Perikanan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://itk.ipb.ac.id/~itkipb" class="nav-link">Departemen Ilmu dan Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" nav-item dropdown mega-menu">
                        <a id="megamenu" data-toggle="dropdown" class=" nav-link dropdown-toggle" href="#">
                            <i class="fa fa-book"></i> PENDIDIKAN
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu" >
                            <div class=" container" >
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">PENDIDIKAN SARJANA(S1)</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://bdp.fpik.ipb.ac.id/?page_id=459&lang=en " class="nav-link text-dark ">Teknologi dan
                        Manajemen Perikanan Budidaya</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id " class="nav-link ">Manajemen Sumberdaya Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://thp.fpik.ipb.ac.id " class="nav-link ">Teknologi Hasil Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://psp.fpik.ipb.ac.id " class="nav-link ">Pemanfaatan Sumberdaya Perikanan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/itkipb " class="nav-link ">Ilmu dan Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">PENDIDIKAN MAGISTER(S2)</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://bdp.fpik.ipb.ac.id/?p=115 " class="nav-link ">Magister Ilmu Akuakultur</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/sdp/ " class="nav-link ">Magister Pengelolaan Sumberdaya
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/spl/ " class="nav-link ">Magiaster Ilmu Pengelolaan
                        Sumberdaya Pesisir dan Lautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://thp.ipb.ac.id/postgraduate-admission/ " class="nav-link ">Magister Teknologi Hasil
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://psp.fpik.ipb.ac.id/index.php/pendidikan/program-s2/ " class="nav-link ">Magister
                        Teknologi Perikanan Laut</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/~itkipb/program-pasca-sarjana-ilmu-kelautan/ " class="nav-link ">Magister Ilmu Kelautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/~itkipb/program-pasca-sarjana-teknologi-kelautan/ " class="nav-link ">Magister Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">PENDIDIKAN DOKTORAL(S3)</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://bdp.fpik.ipb.ac.id/?p=115 " class="nav-link ">Doktor Ilmu Akuakultur</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/sdp/ " class="nav-link ">Doktor Pengelolaan Sumberdaya
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/spl/ " class="nav-link ">Doktor Pengelolaan Sumberdaya
                        Pesisir dan Lautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://thp.ipb.ac.id/pendidikan/doctor/ " class="nav-link ">Doktor Teknologi Hasil
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://psp.fpik.ipb.ac.id/index.php/pendidikan/program-s3/ " class="nav-link ">Doktor
                        Teknologi Perikanan Laut</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/itkipb/program-pasca-sarjana-ilmu-kelautan/ " class="nav-link ">Dokltor
                        Ilmu Kelautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/itkipb/program-pasca-sarjana-teknologi-kelautan/ " class="nav-link ">Doktor Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" nav-item dropdown mega-menu ">
                        <a id="megamenu " data-toggle="dropdown " class=" nav-link dropdown-toggle" href="#">
                            <i class="fa fa-user"></i> Kemahasiswaan dan Alumni
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container" style="width: max-content;">
                                <div class="row">
                                    <div class=" col-lg-12">
                                        <div class=" p-2">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold">Kemahasiswaaan</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="{{ url('/pekan-kreativitas-mahasiswa') }}" class="nav-link ">Program Kreativitas Mahasiswa</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="{{ url('/daftar-kegiatan-mahasiswa') }}" class="nav-link ">Daftar Kegiatan Mahasiswa</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="{{ url('/daftar-prestasi-mahasiswa') }}" class="nav-link ">Daftar Prestasi Mahasiswa</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 ">
                                                    <h6 class="font-weight-bold ">Alumni</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://haipb.ipb.ac.id" class="nav-link ">Himpunan Alumni IPB</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="https://www.instagram.com/hafpikipb" class="nav-link ">Himpunan Alumni FPIK</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">Lembaga Mahasiswa</h6>
                                                    <ul class=" list-unstyled ">
                                                        <li class=" nav-item ">
                                                            <a href="https://dpmfpik.lk.ipb.ac.id " class="nav-link ">DPM FPIK</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/p/bemfpikipb/ " class="nav-link ">BEM FPIK</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.himakua.lk.ipb.ac.id " class="nav-link ">HIMAKUA IPB</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://himasper.lk.ipb.ac.id " class="nav-link ">HIMASPER</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://himasilkan.lk.ipb.ac.id " class="nav-link ">HIMASILKAN</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://himafarin.lk.ipb.ac.id " class="nav-link ">HIMAFARIN</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/himitekaipb/ " class="nav-link ">HIMITEKA</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/fkmfpikipb/ " class="nav-link ">FKMCIPB</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/fdc_ipb/ " class="nav-link ">FDC</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" nav-item dropdown mega-menu ">
                        <a id="megamenu" class="nav-link" data-toggle="collapse" href="#sdg14" aria-expanded="false" aria-controls="sdg14">
                            <i class="fa fa-file"></i> SDG14
                            <b class="caret"></b>
                        </a>
                        <div id="sdg14" class="dropdown-menu collapse">
                            <div class="container" style="width: max-content;">
                                <div class="row">
                                    <div class=" col-lg-12">
                                        <div class="p-2">
                                            <div class="col-lg-12">
                                                <h6 class="font-weight-bold">FPIK IPB</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item ">
                                                        <a href="{{ url('/sdg14-fakultas') }}" class="nav-link ">Fakultas</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://bdp.fpik.ipb.ac.id/?p=5598" class="nav-link ">Departemen Budidaya Perairan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://msp.fpik.ipb.ac.id/en/category/sdg-14/" class="nav-link ">Departemen Manajemen Sumberdaya Perairan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://thp.ipb.ac.id/?s=sdg" class="nav-link ">Departemen Teknologi Hasil Perairan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://psp.fpik.ipb.ac.id/index.php/id/sdg14/" class="nav-link ">Departemen Pemanfaatan Sumberdaya Perikanan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://itk.ipb.ac.id/~itkipb/?s=SDG" class="nav-link ">Departemen Ilmu dan Teknologi Kelautan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=" search-form">
                            <div class="input-group btn-group">
                                <input type="text" class="form-control" name="s" placeholder="Search ...">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- / HEADER -->

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Program Kreativitas Mahasiswa</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Program Kreativitas Mahasiswa</h1>

                        </div>
                        <div class="post-content">
                            <div class="post-content">
                                <!-- <figure class="entry-thumbnail slider-wrapper">
                                    <img src="photo/gallery/gallery15.jpg" alt="#">
                                </figure> -->
                                <table>
                                    <thead style="text-align: center; background-color: darkgray;">
                                        <tr>
                                            <td>No</td>
                                            <td>Judul</td>
                                            <td>Bidang Kegiatan</td>
                                            <td>Nama Ketua</td>
                                            <td>Nim Ketua</td>
                                        </tr>
                                    </thead>
                                    @foreach($pkm as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->title_pkm}}</td>
                                            <td>{{$data->field}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->nim}}</td>
                                        </tr>
                                    @endforeach   
                                        {{-- <tr>
                                            <td>1</td>
                                            <td>ATLANTIS: Kompleks Smart Underwater Fruit Factory Menuju</td>
                                            <td>PKM GT</td>
                                            <td>Ari Triharyono</td>
                                            <td>C44170009</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Green Coastal Flying City: Kota Melayang Pesisir Berbasis Energi</td>
                                            <td>PKM GT</td>
                                            <td>Angelina Rambe</td>
                                            <td>C24170056</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>"LOTIUM"(LOTUS-NASTURTIUM) INOVASI MINUMAN SACHET SIAP SEDUHBERBASIS AKAR TERATAI DAN SELADA AIR UNTUK MEMBANTU MENCEGAH
                                            STRESS OKSIDATIF</td>
                                            <td>PKM K</td>
                                            <td>ROMI TARIGAN</td>
                                            <td>C24170026</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>"RINORI INSTANT CREAM SOUP" KOMBINASI RUMPUT LAUT, TERIPANG,
                                                 DAN SELEDRI SEBAGAI MAKANAN FUNGSIONAL PENCEGAH HIPERTENSI</td>
                                            <td>PKM K</td>
                                            <td>LILIK ENDAH SULISTYOWATI</td>
                                            <td>C24170004</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>HELBYHERB(H2):INOVASI FUNGSIONAL 
                                                "WISDOM OF TRADITIONAL DRINK" HERBA NUSANTARA</td>
                                            <td>PKM K</td>
                                            <td>DONNY DWI HARYANTO</td>
                                            <td>C34160075</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hi-mino: INOVASI MINA-STOCK INSTAN BERBASIS
                                                 INDIGENOUS KONSENTRAT PROTEIN IKAN SEBAGAI AUGMENTASI GIZI</td>
                                            <td>PKM K</td>
                                            <td>KAMILA SYIFA FIRDA</td>
                                            <td>C34170038</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>INSTRUMENT PERHITUNGAN BENIH UDANG ENGGUNAKAN METODE DEEP LEARNING</td>
                                            <td>PKM KC</td>
                                            <td>YULIANTI RATNASARI</td>
                                            <td>C54160055</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>PATRIOT: Sistem Otomatisasi Berbasis IoT untuk Pembersihan Limbah Dasar Tambak Udang</td>
                                            <td>PKM KC</td>
                                            <td>ALIFYANDO FIRMANDI PANDEWO</td>
                                            <td>C54160102</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Bioprospecting Nanoemulsi Water in Oil dengan Ultrasonik pada Kolagen Teripang Pasir Holothuria scabra sebagai
                                            Transcutaneous Delivery</td>
                                            <td>PKM PE</td>
                                            <td>I DEWA MADE RIZKY WIJAYA</td>
                                            <td>C34160046</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>EXCELLENT FIRE RESISTANCE LOGISTIC BIOFOAM
                                                 BERBASIS RANCANGAN MATERIAL NANOFIBER HIDROKSIAPATIT DARI TULANG IKAN</td>
                                            <td>PKM PE</td>
                                            <td>NURUL AULIA PUSPITA</td>
                                            <td>C34160072</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>GARAM RENDAH SODIUM DARI BERBAGAI JENIS RUMPUT LAUT UNTUK PASIEN HIPERTENSI</td>
                                            <td>PKM PE</td>
                                            <td>AMALIA RAHMADHANI</td>
                                            <td>CC34160063</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>KEAKURATAN PELABELAN DOCOSAHEXAENOIC ACID SUPLEMEN VIRGIN MINYAK MATA TUNA UNTUK STUNTING MELALUI DETERMINASI KERAGAAN
                                            ASAM LEMAK OMEGA-3 DENGAN NEAR-INFRARED</td>
                                            <td>PKM PE</td>
                                            <td>MUHAMMAD SEPITIARMANSYAH ADIPUTRA</td>
                                            <td>C34150081</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>OPTIMASI FORMULASI PENGEMBANGAN RANCANGAN SUPLEMEN KEHAMILAN BERBASIS VIRGIN MINYAK MATA TUNA DAN HIDROLISAT PROTEIN
                                            KATSUOBUSHI MENGGUNAKAN SIMPLEX LATTICE MIXTURE DESIGN</td>
                                            <td>PKM PE</td>
                                            <td>SILVA FAUZIAH</td>
                                            <td>C34160045</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Sistem Pendekatan Konseptual Nelayan Tradisional Untuk Menentukan Musim Penangkapan Lobster Berdasarkan
                                            Ethno-Oceanography dan Kearifan Lokal</td>
                                            <td>PKM PSH</td>
                                            <td>ELVANRI ANGGI WIDIANTI</td>
                                            <td>C44170038</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Holie Sea: Wisata Bahari Buatan Berbasis
                                                 Hologram Interaktif Guna Mewujudkan Konservasi Berkelanjutan</td>
                                            <td>PKM GT</td>
                                            <td>NADYAH ADELIA</td>
                                            <td>C14170037</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="share-box" id="yw1">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="http://twitter.com/"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/">
                                    <i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </article>
                    <!-- / Content -->

                    <!-- Comments -->
                    <!-- / Comments -->
                </div>
                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Kemahasiswaan FPIK IPB</h3>
                        </div>
                        <!-- <p>Tidak ada info terbaru saat ini</p> -->
                        <ul class="post-list">
                            <li>
                                <a href="{{ url('/pekan-kreativitas-mahasiswa') }}" title="PKM">Pekan Kreativitas Mahasiswa</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{ url('/daftar-prestasi-mahasiswa') }}" title="Prestasi mahasiswa">Daftar Prestasi
                                    Mahasiswa</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{ url('/daftar-kegiatan-mahasiswa') }}" title="Kegiatan Mahasiswa">Daftar Kegiatan
                                    Mahasiswa</a>
                                <!-- <div class="entry-meta">
                                        <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>
                <!-- content end here -->
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 footer-brand-wrapper">
                        <a href="#" class="footer-brand"><img src="{{asset('frontend/photo/logo/rsz_cropped-logo_ipbsvg_-2-180x180.png')}}"
                                alt="..."></a>
                        <address>
                            <strong>FPIK - IPB University</strong><br>
                            Jl. Agatis, Kampus IPB Dramaga Bogor<br>
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;
                            <a href="#">fpik@ipb.ac.id</a><br>
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;
                            <a href="#">+62 251 8622909 - 8622911</a><br>
                            <i class="fa fa-print"></i>&nbsp;&nbsp;
                            <a href="#">+62 251 8622907</a><br>
                        </address>
                    </div>
                    <div class="col-md-7 col-sm-7 footer-menu-wrapper">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 widget">
                                <div class="widget-header">
                                    <h3 class="widget-title">Tautan</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="menu-footer">
                                            <ul id="menu-footer-pages" class="menu">
                                                <li><a href="https://ipb.ac.id">Institut Pertanian Bogor</a></li>
                                                <li><a href="https://www.ristekbrin.go.id">Kemenristekdikti</a></li>
                                                <li><a href="https://www.kemdikbud.go.id">Kemendikbud</a></li>
                                                <li><a href="https://kkp.go.id">Kementrian Kelautan dan Perikanan</a></li>
                                                <li><a href="https://admisi.ipb.ac.id">Admisi IPB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="menu-footer">
                                            <ul id="menu-footer-pages" class="menu">
                                                <li><a href="https://apps.ipb.ac.id">Apps IPB</a></li>
                                                <li><a href="http://journal.ipb.ac.id">Journal</a></li>
                                                <li><a href="https://repository.ipb.ac.id">Repository</a></li>
                                                <li><a href="https://siti.ipb.ac.id">Sistem Informasi Terintegrasi(SITI)</a>
                                                </li>
                                                <li><a href="https://lms.ipb.ac.id">Lecture Management System(LMS)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container text-center">
                <p class="copyright">&copy; 2020 FPIK - IPB UNIVERSITY</p>
            </div>
        </div>
    </footer>
    <!-- / FOOTER -->

    <script type="text/javascript" src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/jquery.pin.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/jquery.nav.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/jquery.matchHeight-min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/apps.min.js')}}"></script>

    <!-- Asynchronous CSS & Font -->
    <noscript id="deferred-styles">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lora:400,400i,700|Montserrat:400,700|Open+Sans:400,400i,700,700i">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style-2.css')}}">
    </noscript>

    <script type="text/javascript">
        // CSS async
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.head.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        if (raf) raf(function() {
            window.setTimeout(loadDeferredStyles, 0);
        });
        else window.addEventListener('load', loadDeferredStyles);
    </script>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../../../connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function() {
            (function($) {
                $('#remove-me').hide();

            })(jQuery);
        });
    </script>
    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function() {
            (function($) {
                if ($('#gallery-archives').length || $('.event-table').length || $('.entry-thumbnail').length) {
                    socialShare();
                }

                if ($('.gallery-slider').length && $(".gallery-nav-slider").length) {
                    socialShare();
                    // Gallery Slider Preview
                    $(".gallery-slider").slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-nav-slider',
                        responsive: [{
                            breakpoint: 600,
                            settings: {
                                arrows: true,
                                asNavFor: '',
                                fade: false
                            }
                        }]
                    });

                    $(".post-content .gallery-nav-slider").slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-slider',
                        dots: false,
                        centerMode: true,
                        focusOnSelect: true,
                        verticalSwiping: true
                    });

                    // Gallery Slider Nav
                    $(".gallery-nav-slider").slick({
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-slider',
                        dots: false,
                        centerMode: true,
                        focusOnSelect: true,
                        vertical: true,
                        verticalSwiping: true
                    });
                }
            })(jQuery);
        });
    </script>

</body>

</html>