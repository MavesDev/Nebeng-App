@extends('layout.main2')

@section('title', 'Kelola Data')

@section('content')

<div class="data">
    <h2>Kelola Data</h2>

    <!-- Bagian Search -->
    <div class="data-search">
        <form action="" method="get">
            <input type="text" placeholder="Cari berdasarkan nama atau id...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- Bagian card user -->
    <div class="card">
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>Muhammad Abdurohman Rio Kurniawan</h4>
                <p>089510260540</p>
            </div>
            <div class="card-link">
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="mobile-warning">
    <i class="fas fa-exclamation-circle"></i>
    <h3>Halaman Ini Tidak Mendukung Ukuran Web Ini</h3>
</div>

@endsection