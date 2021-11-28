@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
<!-- Halaman untuk Dashboard (Jangan Dulu Sentuh) -->
<!-- Buat CSS nya Dashboard.css -->
<body>

    <div class="main">
        <!-- Bagian Tanggal -->
        <div class="main-date">
            <p id="time_span"></p>
        </div>

        <div class="main-dash">
            <!-- Bagian Riwayat Pemakai -->
            <h2>Dashboard</h2>

            <div class="main-dash-title">
                <p id="main-costumer">{{$userCount}}</p>
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
            <h2>{{Auth::user()->nama_admin}}</h2>
            <p>{{Auth::user()->role}}</p>
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
                    <form action="/logout" method="POST">
                        @csrf
                        <button>
                            <span class="fas fa-sign-out-alt" style="font-size: 20px;"></span>
                            <span id="txt-dash">Log out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    {{-- javascript live time --}}
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
