@extends('layouts.frontend.main')
@section('title', 'Detail item')
@section('content')

<style>
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        border: none !important
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header-detail" style="text-align: center">
    <h1 class="text-white inter-bold fz-30">
        CRUD : Nuxt 3
    </h1><br>
    <center>
        <div style="max-width: 60%">
            <small class="text-white inter-regular fz-12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, perferendis. Nam quas, vero exercitationem, culpa aperiam neque iste consequatur veniam ipsam recusandae explicabo. Incidunt unde qui fugit debitis voluptas eaque!, Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia facilis adipisci vel assumenda atque quia corrupti repellendus sed, ipsam quibusdam, cum quaerat sint quasi quae tenetur provident magni aperiam incidunt?
            </small>
        </div>
        <h4 class="text-grey inter-regular detail-date fz-10">20-06-2024 | By <a href="" class="inter-semibold">Yusron Laksono <img src="{{ asset('assets/icons/arrow-top-right-blue.png') }}" class="arrow-detail-item" alt=""></a></h4>
    </center>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="col-md-6">
                <div class="feature-container">
                    <span class="feature-heading">Fitur yang tersedia</span>
                    <ul class="text-grey">
                        <li><img class="icon-check" src="{{ asset('assets/icons/check.png') }}" alt=""> JavaScript Object Oriented Programming</li>
                        <li><img class="icon-check" src="{{ asset('assets/icons/check.png') }}" alt=""> JavaScript Domain Object Model</li>
                        <li><img class="icon-check" src="{{ asset('assets/icons/check.png') }}" alt=""> JavaScript Async</li>
                        <li><img class="icon-check" src="{{ asset('assets/icons/check.png') }}" alt=""> JavaScript Modules</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-container">
                    <span class="feature-heading">Yang perlu disiapkan</span>
                    <ul class="text-grey">
                        <li><img class="icon-check" src="{{ asset('assets/icons/gear.png') }}" alt=""> PHP</li>
                        <li><img class="icon-check" src="{{ asset('assets/icons/gear.png') }}" alt=""> Node JS</li>
                        <li><img class="icon-check" src="{{ asset('assets/icons/gear.png') }}" alt=""> Visual Studio Code</li>
                        <li><img class="icon-check" src="{{ asset('assets/icons/gear.png') }}" alt=""> Browser</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <span class="feature-heading">Deskripsi</span>
                <span class="feature-description text-grey">
                    Selamat datang di course HTML, CSS dan JavaScript dari Pemula sampai Mahir. Disini kita akan belajar Web dasar dari HTML, CSS dan
                    JavaScript dari tingkat dasar sampai tingkat mahir, disertai dengan studi kasus. Akan banyak materi yang akan dibahas di course ini
                    seperti :
                    <ul>
                        <li>HTML Dasar, disini kita akan belajar tentang dasar-dasar web menggunakan HTML. Bagaimana membuat web menggunakan HTML</li>
                        <li>HTML Form, disini kita akan belajar bagaimana membuat Form menggunakan HTML. Form adalah salah satu bagian untuk berinteraksi dengan pengguna web</li>
                        <li>CSS Dasar, disini kita akan belajar tentang CSS, untuk menambahkan gaya dan tampilan ke halaman HTML agar lebih menarik</li>
                        <li>CSS Layout, disini kita akan belajar tentang cara melakukan tata telak posisi element-element HTML mengggunakan CSS</li>
                        <li>Pemrograman JavaScript Dasar, disini kita akan belajar tentang dasar-dasar pemrograman JavaScript. Ini adalah materi awal yang wajib dikuasai</li>
                        <li>Pemrograman JavaScript Object Oriented Programming, disini kita akan belajar pemrograman berorientasi objek di JavaScript, salah satu paradigma paling populer saat ini</li>
                        <li>Pemrograman JavaScript Modules, disini kita akan belajar cara membuat aplikasi javascript yang modular, sehingga mudah digunakan</li>
                        <li>Pemrograman JavaScript Document Object Model, disini kita akan belajar bagaimana interaksi antara javascript dan html dan juga css, sehingga bisa membuat halaman web lebih kaya akan interaksi</li>
                        <li>Pemrograman JavaScript Async, disini kita akan belajar bagaimana asynchronous programming di javascript, seperti mengambil data dari server, dan lain-lain</li>
                        <li>Pemrograman JavaScript Web API, kita akan bahas banyak web api yang tersedia di javascript</li>
                        <li>Studi Kasus Menggunakan JavaScript, dan course ini akan dilengkapi banyak studi kasus</li>
                    </ul>
                </span>
            </div>
            <div class="col-md-12 mt-2">
                <div class="feature-container">
                    <span class="feature-heading">Screenshot</span>
                    <span class="feature-description text-grey">
                        Beberapa screenshot dari sistem ini
                    </span>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/bg/content-2.png') }}">
                            </div>
                            <br><h4 class="inter-bold fz-13 text-white">Halaman utama</h4>
                            <span class="inter-regular text-grey">
                                Halaman awal yang akan tampil saat situs dimuat
                            </span>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/bg/content-2.png') }}">
                            </div>
                            <br><h4 class="inter-bold fz-13 text-white">Halaman utama</h4>
                            <span class="inter-regular text-grey">
                                Halaman awal yang akan tampil saat situs dimuat
                            </span>
                        </div>
                        <div class="col-md-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/bg/content-2.png') }}">
                            </div>
                            <br><h4 class="inter-bold fz-13 text-white">Halaman utama</h4>
                            <span class="inter-regular text-grey">
                                Halaman awal yang akan tampil saat situs dimuat
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="col-md-12">
                <div class="feature-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="https://media.licdn.com/dms/image/D5612AQHzfMNm-stGSQ/article-cover_image-shrink_600_2000/0/1692114352814?e=2147483647&v=beta&t=Oh0ojyb8sqdbD7rj9K2arN_t_Gg2svCPL6L1dgd7tQE" style="width:100%">
                        </div>
                        <div class="col-lg-8">
                            <span class="feature-heading">Dapatkan secara gratis</span>
                            <div class="button-action">
                                <button class="_btn-download">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                    </svg>
                                    Unduh sekarang
                                </button>
                                <button class="_btn-cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                                    </svg>
                                    Tambah ke keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <h2 class="feature-title">Yang didapatkan :</h2>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th class="inter-semibold">File</th>
                                <th class="inter-semibold">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="inter-regular text-grey"><img class="icon-check" src="{{ asset('assets/icons/file.png') }}" alt=""> custom-style.css</td>
                                <td class="inter-regular text-grey">
                                    Beberapa code yang mungkin Anda butuhkan
                                </td>
                            </tr>
                            <tr>
                                <td class="inter-regular text-grey"><img class="icon-check" src="{{ asset('assets/icons/file.png') }}" alt=""> firebase-worker.js</td>
                                <td class="inter-regular text-grey">
                                    Beberapa code yang mungkin Anda butuhkan
                                </td>
                            </tr>
                            <tr>
                                <td class="inter-regular text-grey"><img class="icon-check" src="{{ asset('assets/icons/file.png') }}" alt=""> customHelper.php</td>
                                <td class="inter-regular text-grey">
                                    Beberapa code yang mungkin Anda butuhkan
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="line"></div>
                    <span class="feature-heading">Hubungi Developer</span>
                    <span class="feature-description text-grey">Butuh menghubungi developer? Jangan ragu, langsung hubungi developer terkait sekarang juga!</span>
                    <div class="button-action">
                        <button class="_btn-contact"><img src="{{ asset('assets/icons/cs.png') }}" alt=""> Hubungi Developer Terkait</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection