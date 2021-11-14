@extends('layout.main2')

@section('title', 'Kelola Data')

@section('content')

<div class="data-left">
    <div class="data-title">
        <h2> Kelola Data </h2>
    </div>

    <!-- Ini tuh buat button kelola data siapa, kalau mau dipisah bisa bikin lagi button nya -->
    <div class="data-button">
        <a href="#">
            <div class="data-button-driver">
                <i class="fas fa-biking" href="#"></i>
                <p>Driver</p>
            </div>
        </a>
        <a href="#">
            <div class="data-button-driver">
                <i class="fas fa-user" href="#"></i>
                <p>User</p>
            </div>
        </a>
    </div>
</div>

<!-- Tabel Pengguna Bulanan Katanya -->
<div class="data-right">
    <div class="data-title">
        <h2> Jumlah Penggunaan Aplikasi </h2>
    </div>

    <div class="data-act">
        <div class="data-act-title">
            <h4> 100 </h4>
        </div>
        <h3> User </h3>
        <small>Penebeng Bulan Ini</small>
    </div>

    <div class="data-act">
        <div class="data-act-title">
            <h4> 100 </h4>
        </div>
        <h3> Driver </h3>
        <small>Nebengers Bulan Ini</small>
    </div>
</div>

@endsection