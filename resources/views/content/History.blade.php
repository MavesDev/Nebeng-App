@extends('layout.main2')

@section('title', 'History')

@section('content')

<div class="history">
    <div class="history-title">
        <h2> History</h2>
    </div>
    
    <div class="history-card">
        @foreach ($data as $dt )
        <div class="card-content">
            <img src="{{ asset('image/None.png') }}" alt="">
            <div class="card-status">
                <h2>{{$dt->User->nama_lengkap}}</h2>
                <p>Isi riwayat</p>
            </div>
            <form action="/history/{{$dt->id}}" method="GET">
                <button><i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
        @endforeach
    </div>

    @if ($dataonce != null)
    <div class="history-detail">
        <h2> Info lengkap Pengantaran </h2>
        <div class="detail-content">
            <div class="detail-item">
                <label for="">Nama :</label>
                <p>{{$dataonce->User->nama_lengkap}}</p>
            </div>
            <div class="detail-item">
                <label for="">Plat Kendaraan :</label>
                <p>{{$dataonce->Kendaraan->nomor_kendaraan}}</p>
            </div>
            <div class="detail-item">
                <label for="">Nama Penumpang :</label>
                <p>{{$dataonce->UserPenumpang->nama_lengkap}}</p>
            </div>
            <div class="detail-item">
                <label for="">Alamat Penjemputan :</label>
                <p>{{$dataonce->Pesanan->alamat_jemput}}</p>
            </div>
            <div class="detail-item">
                <label for="">Alamat Tujuan :</label>
                <p>{{$dataonce->Pesanan->alamat_tujuan}}</p>
            </div>
            <div class="detail-item">
                <label for="">Tanggal & Waktu :</label>
                <p>{{$dataonce->Pesanan->created_at}}</p>
            </div>
            <div class="detail-item">
                <label for="">Jarak :</label>
                <p>masih kosong harus selesai andro dlu</p>
            </div>
        </div>
    </div>
    @else
    <div class="history-detail">
        <h2> Info lengkap Pengantaran </h2>
        <div class="detail-content">
            <div class="detail-item">
                <label for="">Nama :</label>
                <p>-</p>
            </div>
            <div class="detail-item">
                <label for="">Plat Kendaraan :</label>
                <p>-</p>
            </div>
            <div class="detail-item">
                <label for="">Nama Penumpang :</label>
                <p>-</p>
            </div>
            <div class="detail-item">
                <label for="">Alamat Penjemputan :</label>
                <p>-</p>
            </div>
            <div class="detail-item">
                <label for="">Alamat Tujuan :</label>
                <p>-</p>
            </div>
            <div class="detail-item">
                <label for="">Tanggal & Waktu :</label>
                <p>-</p>
            </div>
            <div class="detail-item">
                <label for="">Jarak :</label>
                <p>-</p>
            </div>
        </div>
    </div>
    @endif

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
