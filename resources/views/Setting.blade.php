@extends('layout.main')

@section('title', 'Setting')

@section('container')

<body>
    <div class="setting">
        <div class="setting-date">
            <p> Sabtu, 15 Oktober 2021 | 13:00 </p>
        </div>

        <div class="setting-title">
            <h2>Pengaturan Akun</h2>

            <!-- Untuk Profil Si Akun -->
            <div class="setting-form">
                <div class="setting-form-image">
                    <img src="{{ url('image/none.png') }}" alt="">
                </div>

                <!-- Form Buat Setting -->
                <div class="setting-form-txt">
                    <form action="" method="post">
                        <h2>Informasi Pribadi</h2>
                        <div class="txt-form">
                            <input type="text" placeholder="Nephy-Kyun">
                        </div>
                        <div class="txt-form">
                            <input type="text" placeholder="nephyhandsome@gmail.com">
                        </div>
                        <h2>Ganti Password</h2>
                        <div class="txt-form">
                            <input type="password" placeholder="Current Password">
                        </div>
                        <div class="txt-form">
                            <input type="password" placeholder="New Password">
                        </div>
                        <div class="txt-form">
                            <input type="password" placeholder="Confirm Password">
                        </div>

                        <div class="button-form">
                            <button type="submit"> Kembali </button>
                            <button type="submit"> Konfirmasi </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

@endsection