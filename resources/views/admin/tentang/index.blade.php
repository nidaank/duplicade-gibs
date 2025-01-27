@extends('admin.layouts.main')

@php
    $title = 'Tentang';
@endphp

@section('title')
    Dashboard | Tentang Website
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-sm-9 col-xl-8 mx-auto border border-primary" style="border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-exclamation-circle"></i>
            TENTANG WEBSITE
        </h1>

        <article class="col-11 mx-auto my-4">
            <h1 class="text-primary fs-3 fw-bold text-center mx-auto my-5 p-3 shadow-lg"
                style="width: max-content; border-radius: 10px; transform: rotate(352deg)">
                TECH <br> NEWS
            </h1>

            <p class="mb-3">
                <span class="text-primary fw-semibold">TECH NEWS</span> merupakan sebuah website sederhana yang
                menyajikan informasi seputar teknologi yang ada di seluruh dunia saat ini. Website ini di buat sebagai wadah
                untuk membagikan informasi seputar teknologi yang ada di berbagai belahan dunia kepada semua orang pencinta
                teknologi dan orang yang masih awam terhadap teknologi.
            </p>

            <p class="mb-3">
                Website <span class="text-primary fw-semibold">TECH NEWS</span> ini dibuat oleh M. Revanza Yuzar yang
                merupakan seorang mahasiswa dari jurusan Teknik Informatika yang berkuliah di sebuah universitas swasta di provinsi Aceh, yaitu
                Universitas Jabal Ghafur. Yang saat ini juga merupakan salah satu peserta dari program MSIB (Studi Independen Bersertifikat)
                Kampus Merdeka dengan posisi Full Stack Web Developer di PT Arkatama Multi Solusindo.
            </p>

            <p class="mb-3">
                Website ini telah memiliki fitur untuk Login, Register, dan fitur CRUD (Create, Read, Update,
                Delete) untuk admin pada menu Berita dan Pengumuman yang memungkinkan admin untuk menambahkan, melihat,
                mengedit, serta menghapus Berita dan Pengumuman tersebut. Namun, website ini masih jauh dari kata sempurna dan
                masih membutuhkan berbagai peningkatan untuk kedepannya.
            </p>

            <p class="text-center mb-3">
                <span class="text-primary fw-semibold">TECH NEWS</span> | Versi 1.1.3
            </p>
        </article>
    </div>
@endsection
