@extends('layouts.frontend.main')
@section('title', 'Beranda')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 class="text-white inter-bold fz-30">
        Daftar Semua Proyek
    </h1><br>
    <small class="text-white inter-regular fz-12">
        Berikut ini adalah beberapa daftar proyek yang mungkin cocok untuk Anda <br>
        berdasarkan minat dan keahlian Anda, yang dapat membantu Anda mengembangkan  <br>
        keterampilan serta memberikan kontribusi yang berarti.
    </small><br>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-2">
            <select name="" class="form-control filtering inter-regular text-grey" id="">
                <option value="">Terbaru</option>
                <option value="">Terlama</option>
                <option value="">Paling banyak dilihat</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="" class="form-control filtering inter-regular text-grey" id="">
                <option value="">Gratis</option>
                <option value="">Premium</option>
            </select>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3">
            <a href="{{ url('detail-item/1') }}">
                <div class="image-container">
                    <div class="label-custom-free">Gratis</div>
                    <img src="https://media.licdn.com/dms/image/D5612AQHzfMNm-stGSQ/article-cover_image-shrink_600_2000/0/1692114352814?e=2147483647&v=beta&t=Oh0ojyb8sqdbD7rj9K2arN_t_Gg2svCPL6L1dgd7tQE" alt="Image description">
                </div>
                <br><h4 class="inter-bold fz-13 text-white">CRUD : Nuxt 3 <img src="{{ asset('assets/icons/arrow-top-right.png') }}" class="arrow-detail" alt=""></h4>
                <span class="inter-regular text-grey">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius sunt modi. Excepturi illum accusantium itaque incidunt! Repellat tempore magnam et labore tempora facere, vero facilis quibusdam. Quibusdam, delectus nesciunt?
                </span>
            </a>
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <div class="label-custom-free">Gratis</div>
                <img src="{{ asset('assets/bg/content-1.png') }}">
            </div>
            <br><h4 class="inter-bold fz-13 text-white">CRUD : Nuxt 3 <img src="{{ asset('assets/icons/arrow-top-right.png') }}" class="arrow-detail" alt=""></h4>
            <span class="inter-regular text-grey">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius sunt modi. Excepturi illum accusantium itaque incidunt! Repellat tempore magnam et labore tempora facere, vero facilis quibusdam. Quibusdam, delectus nesciunt?
            </span>
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <div class="label-custom">Premium</div>
                <img src="{{ asset('assets/bg/content-2.png') }}">
            </div>
            <br><h4 class="inter-bold fz-13 text-white">CRUD : Nuxt 3 <img src="{{ asset('assets/icons/arrow-top-right.png') }}" class="arrow-detail" alt=""></h4>
            <span class="inter-regular text-grey">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius sunt modi. Excepturi illum accusantium itaque incidunt! Repellat tempore magnam et labore tempora facere, vero facilis quibusdam. Quibusdam, delectus nesciunt?
            </span>
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <div class="label-custom">Premium</div>
                <img src="https://media.licdn.com/dms/image/D5612AQHzfMNm-stGSQ/article-cover_image-shrink_600_2000/0/1692114352814?e=2147483647&v=beta&t=Oh0ojyb8sqdbD7rj9K2arN_t_Gg2svCPL6L1dgd7tQE" alt="Image description">
            </div>
            <br><h4 class="inter-bold fz-13 text-white">CRUD : Nuxt 3 <img src="{{ asset('assets/icons/arrow-top-right.png') }}" class="arrow-detail" alt=""></h4>
            <span class="inter-regular text-grey">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius sunt modi. Excepturi illum accusantium itaque incidunt! Repellat tempore magnam et labore tempora facere, vero facilis quibusdam. Quibusdam, delectus nesciunt?
            </span>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection