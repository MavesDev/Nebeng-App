@extends('layout.main2')

@section('title', 'Rekap')

@section('content')
@php
    $year = date('Y');
@endphp

<div class="rekap">
    <div class="rekap-title">
        <h2> Rekap </h2>
    </div>

    <!-- Ini bagian buat button search dan filter -->
    <div class="rekap-filter">
        <div class="rekap-button">
            <button onclick="modalToogle()"> Filter <i class="fas fa-filter"></i> </button>
            @if (request()->is('rekap/filter'))
            <a href="/rekap">Cancel</a>
            @endif
        </div>

        <div class="rekap-search">
            <form action="/rekap" method="POST">
                @csrf
                <input type="text" name="search" placeholder="Cari Nama....">
                <button type="submit">Search <i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- ini buat tabelnya -->
    <div class="rekap-table">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Alamat Jemput</th>
                    <th>Tujuan</th>
                    <th>Harga</th>
                    <th>Kendaraan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt )
                <tr>
                    <th>1</th>
                    <td>{{$dt->User->nama_lengkap}}</td>
                    <td>{{$dt->Pesanan->created_at}}</td>
                    <td>{{$dt->Pesanan->alamat_jemput}}</td>
                    <td>{{$dt->Pesanan->alamat_tujuan}}</td>
                    <td>{{$dt->Pesanan->total_bayar}}</td>
                    <td>{{$dt->Kendaraan->merk_kendaraan}}</td>
                </tr>
                @endforeach
                {{-- <tr>
                    <th>2</th>
                    <td>Adam Manhattan</td>
                    <td>4 Oktober 2021</td>
                    <td>SMKN 1 KATAPANG</td>
                    <td>Ramen Bajuri, Gandasoli No 3</td>
                    <td>Rp19.0000</td>
                    <td>Vario</td>
                </tr> --}}
            </tbody>
        </table>
    </div>

    <!-- Modals untuk filter -->
    <div class="modal-form">
        <div class="form">
            <div class="text">
                <h1> Filter </h1>
            </div>
            <form action="/rekap/filter" method="POST">
                @csrf
                <div class="txt-form">
                    <label for=""> Bulan </label>
                    <select name="bulan">
                        <option value="1" selected>Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Tahun </label>
                    <select name="tahun">
                        @for ($i = 2021; $i <= $year; $i++)
                        <option value="{{$i}}" selected>{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="button-form">
                    <button id="button-submit" type="submit"> Filter </button>
                    <a id="button-submit" onclick="modalToogle()"> Kembali </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal buat edit, maapkan males ganti class lagi :D -->
    <div class="show-form">
        <div class="form">
            <div class="text">
                <h1> Edit User </h1>
                <form action="" method="post">
                    <div class="txt-form">
                        <label for=""> User Profile </label>
                        <input type="text" placeholder="Please fill this form...">
                    </div>
                    <div class="txt-form">
                        <label for=""> User Profile </label>
                        <input type="text" placeholder="Please fill this form...">
                    </div>
                    <div class="button-form">
                        <button id="button-submit" type="submit"> Edit </button>
                        <a id="button-submit" onclick="showToogle()"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mobile-warning">
    <i class="fas fa-exclamation-circle"></i>
    <h3>Halaman Ini Tidak Mendukung Ukuran Web Ini</h3>
</div>

<script>
    // Fungsi Keluarin Modals Filter
    function modalToogle() {
        var container = document.querySelector('.modal-form');
        container.classList.toggle('active')
    }

    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.show-form');
        container.classList.toggle('active')
    }
</script>

@endsection
