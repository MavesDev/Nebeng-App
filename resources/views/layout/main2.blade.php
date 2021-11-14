@extends('layout.main')

@section('title', 'Dashboard')

@section('container')

<div class="main">

    <section class="date">
        <div class="date-day">
            <p> Sabtu, 10 November 2021 </p>
        </div>

        <div class="date-profile">
            
            <div class="date-profile-setting">
                <a class="fas fa-cog" href="#"></a>
                <a class="fas fa-sign-out-alt" href="#"></a>
            </div>

            <div class="date-profile-name">
                <p> Your Name</p>
                <small> Administrator </small>
            </div>
            
            <div class="date-profile-img">
                <img src="{{ url('../image/none.png') }}" alt="" height="45px" width="45px">
            </div>
        </div>
    </section>

    <section>
        @yield('content')
    </section>

</div>

@endsection