@extends('layout.main2')

@section('title', 'Detail')

@section('content')

<div class="show">
    <h2>Detail</h2>

    <div class="show-bg">
        <div class="show-title">
            <div class="show-photo">
                <img src="{{ asset('/image/face/s.png') }}" alt="">
            </div>
            <div class="show-name">
                <h4>John Smith</h4>
                <p>089510260540</p>
            </div>
            <div class="show-link">
                <a href="#" onclick="showToogle()"><i class="fas fa-edit"></i></a>
                <form action="">
                    <button><i class="fas fa-trash"></i></button>
                </form>
            </div>
        </div>
        <div class="show-content">
            <div class="show-desc">
                <label for="">Email</label>
                <p>JohnSmithing@gmail.com</p>
            </div>
            <div class="show-desc">
                <label for="">No. Telp</label>
                <p>089510260540</p>
            </div>
            <div class="show-desc">
                <label for="">Jenis Kelamin</label>
                <p>Laki - laki</p>
            </div>
            <div class="show-desc">
                <label for="">Tanggal Daftar</label>
                <p>4 Juni 2020</p>
            </div>
            <div class="show-desc">
                <label for="">Kendaraan</label>
                <p>Honda beat</p>
            </div>
            <div class="show-desc">
                <label for="">Rating</label>
                <p>4.7</p>
            </div>
        </div>
    </div>

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
                    <div class="txt-form">
                        <label for=""> User Profile </label>
                        <input type="text" placeholder="Please fill this form...">
                    </div>
                    <div class="txt-form">
                        <label for=""> User Profile </label>
                        <input type="text" placeholder="Please fill this form...">
                    </div>
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
                        <a id="button-submit" onclick="showToogle()"> Kembali </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.show-form');
        container.classList.toggle('active')
    }
</script>

@endsection