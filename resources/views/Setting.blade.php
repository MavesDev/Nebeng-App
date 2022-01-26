@extends('layout.main')

@section('title', 'Pengaturan')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<body>
    <section class="setting">
        <h4>Pengaturan Akun</h4>
        <div class="setting-image">
            <img src="{{ url('image/None.png') }}" alt="">
        </div>
        <div class="setting-form">
            <form action="/settings" method="post" enctype="multipart/form-data">
                @csrf
                <h3>Informasi Pribadi</h3>
                <div class="txt-form">
                    <input type="text" placeholder="Masukan Nama..." value="{{Auth::user()->nama_admin}}" name="nama_admin" autocomplete="off">
                </div>
                <div class="txt-form">
                    <input type="text" placeholder="Masukan Username..." value="{{Auth::user()->username_admin}}" name="username_admin" autocomplete="off">
                </div>
                <h3>Ganti Gambar</h3>
                <div class="txt-form">
                    <input type="file" name="image" id="">
                </div>
                <h3>Ganti Password</h3>
                <div class="txt-form">
                    <input type="password" placeholder="Masukan Password Sebelumnnya...." name="password_admin">
                </div>
                <div class="txt-form">
                    <input type="password" placeholder="Masukan Password Baru.." name="new_password">
                </div>
                <div class="button-form">
                    {{-- Saya ubah jadi link karena nggak kirim data,cuma desainnya jadi berubah,Tolong perbaiki --}}
                    <form action="#" method="POST">
                        <button type="submit"> Konfirmasi </button>
                    </form>
                    <a href="/"> Kembali </a>
                </div>
            </form>
        </div>
    </section>
</body>

@endsection