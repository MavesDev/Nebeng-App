@extends('layout.main')

@section('title', 'Dashboard')

@section('container')

<!-- Halaman untuk Dashboard (Jangan Dulu Sentuh) -->
<!-- Buat CSS nya Dashboard.css -->

<body>

    <div class="main">
        <!-- Bagian Tanggal -->
        <div class="main-date">
            <p> Sabtu, 15 Oktober 2021 | 13:00 </p>
        </div>

        <div class="main-dash">
            <!-- Bagian Riwayat Pemakai -->
            <h2>Dashboard</h2>

            <div class="main-dash-title">
                <p id="main-costumer">1000</p>
                <p style="font-weight: bold;">Total Riwayat Penggunaan Aplikasi</p>
                <p>Jumlah ini berdasarkan berapa banyak nebengers yang menggunakan aplikasi dalam sebulan terakhir</p>
            </div>
        </div>

        <div class="main-act">
            <!-- Bagian Tabel Aktivitas -->
            <h2>Activities</h2>
            <div class="main-act-table">
                <ul>
                    <li>
                        <div class="main-act-content">
                            <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                            <div class="main-act-txt">
                                <p>Nama</p>
                                <p>Ini keterangan</p>
                            </div>
                            <div class="main-act-span">
                                <span><a class="fas fa-exclamation-circle" href="#"></a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="main-act-content">
                            <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                            <div class="main-act-txt">
                                <p>Nama</p>
                                <p>Ini keterangan</p>
                            </div>
                            <div class="main-act-span">
                                <span><a class="fas fa-exclamation-circle" href="#"></a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="main-act-content">
                            <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                            <div class="main-act-txt">
                                <p>Nama</p>
                                <p>Ini keterangan</p>
                            </div>
                            <div class="main-act-span">
                                <span><a class="fas fa-exclamation-circle" href="#"></a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="main-act-content">
                            <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                            <div class="main-act-txt">
                                <p>Nama</p>
                                <p>Ini keterangan</p>
                            </div>
                            <div class="main-act-span">
                                <span><a class="fas fa-exclamation-circle" href="#"></a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="main-act-content">
                            <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                            <div class="main-act-txt">
                                <p>Nama</p>
                                <p>Ini keterangan</p>
                            </div>
                            <div class="main-act-span">
                                <span><a class="fas fa-exclamation-circle" href="#"></a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="main-act-content">
                            <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                            <div class="main-act-txt">
                                <p>Nama</p>
                                <p>Ini keterangan</p>
                            </div>
                            <div class="main-act-span">
                                <span><a class="fas fa-exclamation-circle" href="#"></a></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="profile-bar">
        <!-- Bagian Profil Dashboard -->
        <div class="profile-bar-brand">
            <h2>Welcome</h2>
            <img src="{{ url('image/none.png') }}" alt="">
        </div>

        <div class="profile-bar-title">
            <h2>Nephy Kyun</h2>
            <p>Administrator</p>
        </div>

        <div class="profile-bar-menu">
            <ul>
                <li>
                    <a href="#">
                        <span class="fas fa-cog" style="font-size: 20px;"></span>
                        <span id="txt-dash">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fas fa-sign-out-alt" style="font-size: 20px;"></span>
                        <span id="txt-dash">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

@endsection