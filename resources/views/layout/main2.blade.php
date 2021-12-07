@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<div class="main">

    <section class="date">
        <div class="date-day">
            <p id="time_span">  </p>
        </div>

        <div class="date-profile">

            <div class="date-profile-setting">
                <a class="fas fa-cog" href="/settings"></a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="fas fa-sign-out-alt"></button>
                </form>
            </div>

            <div class="date-profile-name">
                <p>{{Auth::user()->nama_admin}}</p>
                <small> {{Auth::user()->role}} </small>
            </div>

            <div class="date-profile-img">
                <img src="{{ asset('storage/'.Auth::user()->foto_profile)}}" alt="" height="45px" width="45px">
            </div>
        </div>
    </section>

    <section>
        @yield('content')
    </section>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</div>

@endsection
