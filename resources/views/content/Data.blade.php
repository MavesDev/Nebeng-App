@extends('layout.main2')

@section('title', 'Kelola Data')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<div class="data">
    <h2>Kelola Data</h2>

    <!-- Bagian Search -->
    <div class="data-search">
        <form action="/keloladata" method="POST">
            @csrf
            <input type="text" name="search" placeholder="Cari berdasarkan nama atau No Telepon...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>

        <div class="data-add" onclick="showToogle()">
            <a href="#" id="data-add">Tambah</a>
        </div>
    </div>

    <!-- Bagian card user -->
    <div class="card">
        @foreach ($data as $dt )
        <div class="data-card">
            <div class="card-photo">
                <img src="{{ asset('/image/None.png') }}" alt="" style="width: 45px; height: 45px;">
            </div>
            <div class="card-name">
                <h4>{{$dt->nama_lengkap}}</h4>
                <p>{{$dt->no_telp}}</p>
            </div>
            <div class="card-link">
                <a href="/keloladata/detail/{{$dt->id}}"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal buat tambah | value belum diisi -->
    <div class="show-form">
        <div class="form">
            <div class="text">
                <h1> Tambah User </h1>
                <form action="/keloladata/tambah" method="POST">
                    @csrf
                    <div class="txt-form">
                        <label for=""> NIS </label>
                        <input type="text" placeholder="Nis..." name="nis">
                    </div>
                    <div class="txt-form">
                        <label for=""> Nama Lengkap </label>
                        <input type="text" placeholder="Nama..." name="nama_lengkap">
                    </div>
                    <div class="txt-form">
                        <label for=""> Email </label>
                        <input type="text" placeholder="Email..." name="email">
                    </div>
                    <div class="txt-form">
                        <label for=""> No Telepon </label>
                        <input type="text" placeholder="NoTelepon..." name="no_telp">
                    </div>
                    <div class="txt-form">
                        <label for=""> Jenis Kelamin </label>
                        <select name="jenis_kelamin" id="">
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="txt-form">
                        <label for=""> Password </label>
                        <input type="password" placeholder="Password..." name="password">
                    </div>
                    <div class="button-form">
                        <button id="button-submit" type="submit"> Tambah </button>
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


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!--  Fungsi Keluarin Modals Show -->
<script>
    function showToogle() {
        var container = document.querySelector('.show-form');
        container.classList.toggle('active')
    }
</script>

<!-- Fungsi Modal -->
<script>
    const session = "{{Session::has('status')}}";
        if(session){
            Toastify({
                text: "{{Session::get('status')}}",
                className: "info",
                style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        }
</script>
@endsection
