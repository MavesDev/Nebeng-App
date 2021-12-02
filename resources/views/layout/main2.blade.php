@extends('layout.main')

@section('title', 'Dashboard')

@section('container')

<div class="main">

    <section class="date">
        <div class="date-day">
            <p id="time_span">  </p>
        </div>

        <div class="date-profile">

            <div class="date-profile-setting">
                <a class="fas fa-cog" href="/settings"></a>
                {{-- saya ubah jadi tombol malah ubah desain juga --}}
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
                <img src="{{ asset('image/face')}}/{{Auth::user()->foto_profile }}" alt="" height="45px" width="45px">
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
        let day = weekday[currentTime.getDay()];
        document.getElementById('time_span').innerHTML = day+","+" "+currentTime.getDate()+"-"+currentTime.getMonth()+"-"+currentTime.getFullYear()+" "+ t_str;
        setTimeout(timer,1000);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</div>

@endsection
