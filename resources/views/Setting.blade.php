@extends('layout.main')

@section('title', 'Setting')

@section('container')

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
                    <img src="{{ asset('image/face')}}/{{Auth::user()->foto_profile }}" alt="">
                </div>

                <!-- Form Buat Setting -->
                <div class="setting-form-txt">
                    <form action="" method="post">
                        <h2>Informasi Pribadi</h2>
                        <div class="txt-form">
                            <input type="text" placeholder="{{Auth::user()->nama_admin}}">
                        </div>
                        <div class="txt-form">
                            <input type="text" placeholder="{{Auth::user()->username_admin}}">
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
            let day = weekday[currentTime.getDay()];
            document.getElementById('time_span').innerHTML = day+","+" "+currentTime.getDate()+"-"+currentTime.getMonth()+"-"+currentTime.getFullYear()+" "+ t_str;
            setTimeout(timer,1000);
            }
        </script>
</body>

@endsection
