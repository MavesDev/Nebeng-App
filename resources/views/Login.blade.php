Halaman Login (Boleh Disentuh)
<!-- Nama CSS nya login.css -->
<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Nebeng | Login </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="theme-color" content="#553C7B">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>
    <!-- Hero Start -->
    <section class="login-hero">
        <div class="login-content">
            <p>A Friendly Ojek Online For Student</p>
            <h1> NEBENG </h1>
            <div class="login-button">
                <button onclick="loginToogle()"> Login </button> 
            </div>
        </div>
    </section>  
    <!-- Hero End -->

    <!-- Form Start -->
    <section class="login-form">
        <div class="form-bg">    
            <div class="form">
                <form action="/login" method="post">
                    @csrf
                    <h1> Log In </h1>
                    <div class="txt-form">
                        <label for="username"> Username </label>
                        <input type="text" id="username" name="username" placeholder="John Smith" autocomplete="off">
                    </div>
                    <div class="txt-form">
                        <label for="password"> Password </label>
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="check-form">
                        <label for="checkbox"> Keep Username </label>
                        <input type="checkbox" id="checkbox">
                    </div>
    
                    <div class="button-form">
                        <button type="submit"> Login </button>
                    </div>
                    <div class="quote-form">
                        <p> "Give some Offer, same as Give <br>some help to people" </p>
                    </div>
                </form>
            </div>
            <div class="form-toogle" onclick="loginToogle()"></div>
        </div>
    </section>
    <!-- Form End -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        // Fungsi Keluarin Modals
        function loginToogle() {
            var container = document.querySelector('.login-form');
            container.classList.toggle('active')
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

</html> -->