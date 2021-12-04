@extends('layout.main')

@section('title', 'Setting')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<body>
    <div class="setting">
        <div class="setting-date">
            <p id="time_span">  </p>
        </div>

        <div class="setting-title">
            <h2>Pengaturan Akun</h2>

            <!-- Untuk Profil Si Akun -->
            <div class="setting-form">
                <div class="setting-form-image">
                    <img src="{{asset('storage/'.Auth::user()->foto_profile)}}" alt="">
                </div>

                <!-- Form Buat Setting -->
                <div class="setting-form-txt">
                    <form action="/settings" method="post" enctype="multipart/form-data">
                        @csrf
                        <h2>Informasi Pribadi</h2>
                        <div class="txt-form">
                            <input type="text" placeholder="Masukan Nama..." value="{{Auth::user()->nama_admin}}" name="nama_admin">
                        </div>
                        <div class="txt-form">
                            <input type="text" placeholder="Masukan Username..." value="{{Auth::user()->username_admin}}" name="username_admin">
                        </div>
                        <h2>Ganti Gambar</h2>
                        <div class="txt-form">
                            <input type="file" name="image" id="">
                        </div>
                        <h2>Ganti Password</h2>
                        <div class="txt-form">
                            <input type="password" placeholder="Masukan Password Sebelumnnya...." name="password_admin">
                        </div>
                        <div class="txt-form">
                            <input type="password" placeholder="Masukan Password Baru.." name="new_password">
                        </div>
                        <div class="button-form">
                            {{-- Saya ubah jadi link karena nggak kirim data,cuma desainnya jadi berubah,Tolong perbaiki --}}
                            <a href="/"> Kembali </a>
                            <form action="#" method="POST">
                                <button type="submit"> Konfirmasi </button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            timer();
            function timer(){
             var currentTime = new Date()
            var hours = currentTime.getHours()
            var minutes = currentTime.getMinutes()
            var sec = currentTime.getSeconds()
            if (minutes < 10){
                minutes = "0" + minutes
            }
            if (sec < 10){
                sec = "0" + sec
            }
            var t_str = hours + ":" + minutes + ":" + sec + " ";
            if(hours > 11){
                t_str += "PM";
            } else {
               t_str += "AM";
            }

            //day
            const weekday = new Array(7);
            weekday[0] = "Minggu";
            weekday[1] = "Senin";
            weekday[2] = "Selasa";
            weekday[3] = "Rabu";
            weekday[4] = "Kamis";
            weekday[5] = "Jumat";
            weekday[6] = "Sabtu";
            //month
            const moon = new Array(12);
            moon[0] = "Januari";
            moon[1] = "Februari";
            moon[2] = "Maret";
            moon[3] = "April";
            moon[4] = "Mei";
            moon[5] = "Juni";
            moon[6] = "Juli";
            moon[7] = "Agustus";
            moon[8] = "September";
            moon[9] = "Oktober";
            moon[10] = "November";
            moon[11] = "Desember";
            let month = moon[currentTime.getMonth()];
            let day = weekday[currentTime.getDay()];
            document.getElementById('time_span').innerHTML = day+","+" "+currentTime.getDate()+" "+month+" "+currentTime.getFullYear()+" "+ t_str;
            setTimeout(timer,1000);
            }
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
</body>

@endsection
