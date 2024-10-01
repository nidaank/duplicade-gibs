@extends('user.layouts.main')

@php
    $title = 'Beranda';
@endphp

@section('title')
    Beranda
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 155vh">
        <div class="col-13">
            <img src="{{ asset('img/3HC08073.png') }}" alt="">
        </div>
    </div>

    <!-- New Section with Text and YouTube Embed -->
    <div class="container mt-4">
        <div class="row align-items-center">
            <!-- Left Column (Text) -->
            <div class="col-md-6">
                <p class="text-warning fw-bolder">Video</p>
                <h2>Profil SMP-SMA Global Islamic Boarding School</h2>
                <p>
                Selama lebih dari 10 tahun berdiri, GIBS terus berbenah diri dan menciptakan berbagai inovasi di ranah pengajaran & pembelajaran, kebijakan, serta kurikulum yang telah didesain sedemikian rupa untuk menciptakan kualitas lulusan yang memiliki daya saing tinggi secara global dan mampu meraih masa depan hebat yang mereka impikan.
                </p>
            </div>

            <!-- Right Column (YouTube Video) -->
            <div class="col-md-6 text-md-end">
                <iframe class="youtube-video" width="400" height="235" 
                    src="https://youtube.com/embed/FxPiSYBwHQ0" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Left Column (Text) -->
            <div class="col-md-6">
                <iframe class="youtube-video" width="400" height="235" 
                    src="https://youtube.com/embed/QhbyUvceW8g"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>  
            </div>

            <!-- Right Column (YouTube Video) -->
            <div class="col-md-6">
                <p class="text-warning fw-bolder">Video</p>
                <h2>GIBS Profile 3.0</h2>
                <p>
                Berbagai program dikembangkan karena GIBS percaya bahwa setiap anak adalah unik dan memiliki kelebihannya masing-masing di bidang yang mungkin berbeda-beda untuk mencapai kesuksesan mereka masing-masing. Hal ini sejalan dengan visi dari GIBS yaitu membentuk muslim yang tangguh yang menghasilkan karya bagi pengetahuan, kemanusiaan, dan pembudayaan kehidupan.
                </p>
            </div>
        </div>
    </div>

    <!-- Card Section (from provided code) -->
    <!-- <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>GIBS News</h1>
                <h2>What's New</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="image1.jpg" class="card-img-top" alt="Workshop Stream">
                    <div class="card-body">
                        <h5 class="card-title">Siswa SMA GIBS Kelas 10 Gelar Workshop Stream di Taman Wisata Alam Pulau Bakut</h5>
                        <p class="card-text">BARITO KUALA, 31/8 - Siswa kelas sepuluh boys dari SMA GIBS mengadakan kegiatan&... </p>
                        <p class="card-text"><small class="text-muted">2024-09-13 09:16:35 - Iskandar Dinata Hsb</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image2.jpg" class="card-img-top" alt="HUT RI">
                    <div class="card-body">
                        <h5 class="card-title">Kemerdekaan HUT RI ke 79: Siswa GIBS Getarkan Upacara dengan Pasukan Paskibra, Drum Band, dan Penampilan Siswa</h5>
                        <p class="card-text">ALALAK, 17/8 - Semarakkan Kemerdekaan Hari Ulang Tahun Indonesia ke-79 tahun, SOGIBS adakan upaca... </p>
                        <p class="card-text"><small class="text-muted">2024-08-17 05:07:43 - Administrator</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image3.jpg" class="card-img-top" alt="Kunjungan">
                    <div class="card-body">
                        <h5 class="card-title">Kunjungan Kantor Imigrasi: Membuka Vision GIBSIAN</h5>
                        <p class="card-text">ALALAK, 14/8 - Di Auditorium SMP GIBS, telah diadakan sesi kunjungan dari kantor Imigrasi, Depart... </p>
                        <p class="card-text"><small class="text-muted">2024-08-17 05:05:24 - Administrator</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-primary">See More</a>
            </div>
        </div>
    </div> -->

    <div class="container d-flex flex-wrap justify-content-center" style="margin-top: 90px; position: relative;">
    <div class="container d-flex align-items-center mb-3">
        <div>
            <p class="text-warning fw-bolder mb-0">GIBS NEWS</p>
            <h2 class="fw-bolder">What's New</h2>
        </div>
        <a href="{{ route('user.berita.index') }}" class="btn btn-primary ms-auto">
            <span>See More</span>
        </a>
    </div>

    @forelse ($berita as $item)
        <div class="card col-12 col-md-6 col-lg-3 mx-4 mb-4" style="width: 310px; z-index: 1;">
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="card-img-top"
                style="width: 100%; height: 290px; object-fit: cover">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $item->judul_berita }}</h5>
                <!-- <p class="card-text mb-0"><span class="fw-semibold">Sumber :</span> {{ $item->sumber }}</p> -->
                <div class="d-flex justify-content-between">
                    <p class="card-text mb-0"><span class="fw-semibold"></span> {{ $item->tanggal_upload }}</p>
                    <p class="card-text mb-3"><span class="fw-semibold"></span> {{ $item->penulis }}</p>
                </div>

                <a href="{{ route('user.berita.read', $item->id) }}" class="btn btn-primary d-block col-4 mx-auto mt-auto py-2">
                    <span>Read</span>
                </a>

            </div>
        </div>
    @empty
        <div class="d-flex flex-column justify-content-center py-5" style="height: 500px">
            <!-- <i class="bi bi-emoji-frown" style="font-size: 75px"></i> -->
            Belum Ada Berita Tersedia.
        </div>
    @endforelse
</div>
<div class="container-lg p-5" 
            style="background-color: var(--background); border-radius: 15px; position: absolute; top: 320%; height: 112%; left: 5%; width: 100%; z-index: -1; opacity: 0.9; transform: translateY(-50%);">
</div>

@endsection
