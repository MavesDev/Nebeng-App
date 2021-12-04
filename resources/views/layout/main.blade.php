<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Nebeng App</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/style2.css') }}">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ url('css/setting.css') }}">
    <link rel="stylesheet" href="{{ url('css/data.css') }}">
    <link rel="stylesheet" href="{{ url('css/dataUser.css') }}">
    <link rel="stylesheet" href="{{ url('css/history.css') }}">
    <link rel="stylesheet" href="{{ url('css/feedback.css') }}">
    <link rel="stylesheet" href="{{ url('css/voucher.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('image/logo-crop.png') }}" alt="">
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/" class="{{(request()->is('/')) ? 'active':''}}">
                        <span class="fas fa-home" style="font-size: 20px;"></span>
                        <span id="txt">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/keloladata" class="{{(request()->is('keloladata')) ? 'active':''}}">
                        <span class="fas fa-tasks" style="font-size: 20px;"></span>
                        <span id="txt">Kelola Data</span>
                    </a>
                    <!-- <ul class="dropdown">
                        <li>
                            <a href="#">
                                <span class="fas fa-tasks" style="font-size: 20px;"></span>
                                <span id="txt">Kelola Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fas fa-tasks" style="font-size: 20px;"></span>
                                <span id="txt">Kelola Data Driver</span>
                            </a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="#">
                        <span class="fas fa-tags" style="font-size: 15px;"></span>
                        <span id="txt">Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="far fa-calendar" style="font-size: 20px;"></span>
                        <span id="txt">Rekap</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fas fa-history" style="font-size: 20px;"></span>
                        <span id="txt">Riwayat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fas fa-comment-alt" style="font-size: 20px;"></span>
                        <span id="txt">Feedback</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div>
        @yield('container')
    </div>
    <!--
    <script>
        function dropdownToogle() {
            var dropdown = document.querySelector('.dropdown');
            dropdown.classList.toggle('active')
        }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


</body>

</html>
