@extends('layout.main')

@section('title', 'Riwayat')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<section class="data">
    <h4> Riwayat </h4>
    <div class="data-search">
        {{-- <div class="data-filter">
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
        </div> --}}
        <div class="data-plus">
            <p style="font-size: 13px; margin: 0px">Total Transaksi Nebeng Bulan Ini: {{$data->count()}}</p>
        </div>
    </div>
    <div class="data-table">
        <table>
                <thead>
                    <tr class="none">
                        <th></th>
                        <th>Nama</th>
                        <th>Penumpang</th>
                        <th>Alamat Jemput</th>
                        <th>Alamat Tujuan</th>
                        <th>Kendaraan</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $riwayat )
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>{{$riwayat->User->nama_lengkap}}</td>
                        <td>{{$riwayat->UserPenumpang->nama_lengkap}}</td>
                        <td>{{$riwayat->Pesanan->alamat_jemput}}</td>
                        <td>{{$riwayat->Pesanan->alamat_tujuan}}</td>
                        <td>{{$riwayat->User->Kendaraan->type_kendaraan ."|". $riwayat->User->Kendaraan->merk_kendaraan}}</td>
                        <td>{{$riwayat->Pesanan->total_bayar}}</td>
                    </tr>
                    @endforeach
                    {{-- <tr>
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
                    </tr> --}}
                </tbody>
        </table>
    </div>

    <div class="riwayat-popup">
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
                <a href="#"  onclick="showRiwayat()">Kembali</a>
            </div>
        </form>
        <div class="popup-bg" onclick="showRiwayat()"></div>
    </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!--  Fungsi Keluarin Modals Show -->
<script>
    function showRiwayat() {
        var container = document.querySelector('.riwayat-popup');
        container.classList.toggle('active')
    }
</script>
@endsection
