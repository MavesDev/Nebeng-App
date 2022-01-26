@extends('layout.main')

@section('title', 'Rekap')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<section class="data">
    <h4> Rekap </h4>
    <div class="data-search">
        <div class="data-filter">
            <div class="filters">
                <div class="filter">
                    <select name="" id="">
                        <option value="">All</option>
                    </select>
                </div>
                <div class="filter">
                    <select name="" id="">
                        <option value="">All</option>
                    </select>
                </div>
            </div>
            <form action="">
                <input type="text" placeholder="Cari disini">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="data-plus">
            <button onclick="showRekap()">Filter</button>
        </div>
    </div>
    <div class="data-table">
        <table>
                <thead>
                    <tr class="none">
                        <th></th>
                        <th>Nama</th>
                        <th>Nomor Transaksi</th>
                        <th>Alamat</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>Raqhin Kusmanadinata</td>
                        <td>098689765</td>
                        <td>Sanggar indah banjaran blok G2</td>
                        <td>Rp.5000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>Raqhin Kusmanadinata</td>
                        <td>098689765</td>
                        <td>Sanggar indah banjaran blok G2</td>
                        <td>Rp.5000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>Raqhin Kusmanadinata</td>
                        <td>098689765</td>
                        <td>Sanggar indah banjaran blok G2</td>
                        <td>Rp.5000</td>
                    </tr>
                </tbody>
        </table>
    </div>

    <div class="rekap-popup">
        <form class="popup">
            <div class="popup-title">
                <h3>Filter Data</h3>
            </div>
            <div class="popup-data">
                <label for="">Bulan</label>
                <select name="" id="">
                    <option value="" selected>Juni</option>
                    <option value="">Mei</option>
                </select>
            </div>
            <div class="popup-data">
                <label for="">Tahun</label>
                <select name="" id="">
                    <option value="" selected>2022</option>
                    <option value="">2021</option>
                </select>
            </div>
            <div class="popup-submit">
                <button> Filter </button>
                <a href="#"  onclick="showRekap()">Kembali</a>
            </div>
        </form>
        <div class="popup-bg" onclick="showRekap()"></div>
    </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!--  Fungsi Keluarin Modals Show -->
<script>
    function showRekap() {
        var container = document.querySelector('.rekap-popup');
        container.classList.toggle('active')
    }
</script>
@endsection
