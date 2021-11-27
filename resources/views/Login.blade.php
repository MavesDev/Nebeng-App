<!-- Halaman Login (Boleh Disentuh) -->
<!-- Nama CSS nya login.css -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Nebeng | Login </title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="center">
        <!-- Bagian Landing Page Sebelum Modals Login Muncul -->
        <div class="text">
            <p>A Friendly Ojek Online For Student</p>
            <h1> NEBENG </h1>
        </div>
        <div class="button">
            <!-- Buat Keluarin Modals -->
            <button onclick="loginToogle()"> Login </button>
        </div>
    </div>

    <div class="login-form">
        <!-- Bagian Modals Form Login -->
        <div class="form">
            <div class="text">
                <h1> Log in </h1>
            </div>
            <form action="/login" method="post">
                @csrf
                <div class="txt-form">
                    <label for=""> Username </label>
                    <input type="text" name="username">
                </div>
                <div class="txt-form">
                    <label for=""> Password </label>
                    <input type="password" name="password">
                </div>
                <div class="check-form">
                    <label for=""> Keep Username </label>
                    <input type="checkbox">
                </div>

                <div class="button-form">
                    <button type="submit"> Log in </button>
                </div>
                <div class="forgot-password">
                    <a href="#"> Forget Password? </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Fungsi Keluarin Modals
        function loginToogle(){
            var container = document.querySelector('.login-form');
            container.classList.toggle('active')
        }
    </script>
</body>

</html>
