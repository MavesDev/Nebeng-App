@extends('layout.main2')

@section('title', 'History')

@section('content')

<div class="history">
    <div class="history-title">
        <h2> History</h2>
    </div>

    <!-- Sama buat filter ama search -->
    <!-- <div class="history-filter">
        <div class="history-button">
            <button onclick="filterToogle()"> Filter <i class="fas fa-filter"></i> </button>
        </div>

        <div class="history-search">
            <form action="">
                <input type="text" placeholder="Search here....">
                <button type="submit">Search <i class="fas fa-search"></i></button>
            </form>
        </div>
    </div> -->

    <div class="history-card">
        <div class="card-content">
            <img src="{{ asset('image/None.png') }}" alt="">
            <div class="card-status">
                <h2>Ulfric Stormcloak</h2>
                <p>Isi riwayat</p>
            </div>
            <a href="#"><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="history-detail">
        <h2> Info lengkap Pengantaran </h2>
        <div class="detail-content">
            <div class="detail-item">
                <label for="">Nama :</label>
                <p>Ulfric Stormcloak</p>
            </div>
            <div class="detail-item">
                <label for="">Plat Kendaraan :</label>
                <p>S TRMCLK</p>
            </div>
            <div class="detail-item">
                <label for="">Nama Penumpang :</label>
                <p>General Tulius</p>
            </div>
            <div class="detail-item">
                <label for="">Alamat Penjemputan :</label>
                <p>Solitude</p>
            </div>
            <div class="detail-item">
                <label for="">Alamat Tujuan :</label>
                <p>Windhelm</p>
            </div>
            <div class="detail-item">
                <label for="">Tanggal & Waktu :</label>
                <p>Morndas, 12 Heartfire 1233 | 12.00</p>
            </div>
            <div class="detail-item">
                <label for="">Jarak :</label>
                <p>2560 KM</p>
            </div>
        </div>
    </div>

    <!-- Modals untuk filter -->
    <div class="filter-form">
        <div class="form">
            <div class="text">
                <h1> Filter </h1>
            </div>
            <form action="" method="post">
                <div class="txt-form">
                    <label for=""> Filter Content </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Filter Content </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Filter Content </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="button-form">
                    <button id="button-submit" type="submit"> Lets Filter! </button>
                    <a id="button-submit" onclick="filterToogle()"> Back </a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="mobile-warning">
    <i class="fas fa-exclamation-circle"></i>
    <h3>Halaman Ini Tidak Mendukung Ukuran Web Ini</h3>
</div>

<script>
    // Fungsi Keluarin Modals Filter
    function filterToogle() {
        var container = document.querySelector('.filter-form');
        container.classList.toggle('active')
    }

    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.history-form');
        container.classList.toggle('active')
    }
</script>

@endsection