<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/login.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <title>Login | Nebeng Admin</title>
  </head>
  <body>
    <section class="login">
      <div class="login-hero active">
        <div class="login-title">
          <img src="{{ url('image/login/logo-crop.png')}}" alt="" />
          <h2>Nebeng Admin</h2>
        </div>
        <div class="login-image">
          <img src="{{ url('image/login/login.png')}}" alt="" onclick="loginToogle()" />
        </div>
      </div>
      <div class="login-form">
        <form action="/login" method="post">
            @csrf
          <div class="form-title">
            <h2>Masuk</h2>
            <small>Selamat datang di aplikasi Nebeng</small>
          </div>
          <div class="form-content">
            <i class="fas fa-envelope"></i>
            <input  type="text" id="username" name="username" placeholder="Masukan username"  autocomplete="off"/>
          </div>
          <div class="form-content">
            <i class="fas fa-key"></i>
            <input type="password" id="password" name="password" placeholder="Masukan password" />
          </div>
          <div class="form-content-checkbox">
            <input type="checkbox" name="me" />
            <label for="me">Ingat Saya?</label>
          </div>
          <button>Masuk</button>
        </form>
      </div>
    </section>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
      // Fungsi Keluarin Modals
      function loginToogle() {
        var container = document.querySelector(".login-form");
        var container2 = document.querySelector(".login-hero");
        container.classList.toggle("active");
        container2.classList.toggle("active");
      }
      const session = "{{Session::has('status')}}";
            if(session){
                Toastify({
                    text: "{{Session::get('status')}}",
                    className: "info",
                    style: {
                    background: "linear-gradient(to left, #0790E8, #0e61D1)",
                    }
                }).showToast();
            }
    </script>
  </body>
</html>
