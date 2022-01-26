<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    
    <!-- Toast CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- File CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="css/data.css">
    <link rel="stylesheet" href="css/popup.css">

    <title>@yield('title') | Nebeng Admin</title>
  </head>
  <body>
    <div class="container">
      <!-- Navbar Start -->
      <section class="navbar">
        <div class="navbar-content">
          <div class="logo">
            <img src="image/logo-crop.png" alt="" />
            <h4>Nebeng Admin</h4>
          </div>
          <div class="toogle">
            <button onclick="navbarToogle()"><i class="fas fa-bars"></i></button>
          </div>
          <div class="link">
            <ul>
              <div class="link-toogle">
                <p class="link-title">Menu</p>
                <button><i class="fas fa-times" onclick="navbarToogle()"></i></button>
              </div>
              <li class="active">
                <a href="/" class="{{(request()->is('/')) ? 'active':''}}">
                  <p><i class="fas fa-home"></i> Beranda</p>
                </a>
              </li>
              <li>
                <a href="/keloladata" class="{{(request()->is('keloladata')) ? 'active':''}}">
                  <p><i class="fas fa-tasks"></i> Kelola Data</p>
                </a>
              </li>
              <li>
                <a href="/history" class="{{(request()->is('history')) ? 'active':''}}">
                  <p><i class="fas fa-history"></i> Riwayat</p>
                </a>
              </li>
              <li>
                <a href="/rekap" class="{{(request()->is('rekap')) ? 'active':''}}">
                  <p><i class="fas fa-book-open"></i> Rekap</p>
                </a>
              </li>
              <p class="link-title">Akun</p>
              <li>
                <a href="/settings">
                  <p><i class="fas fa-cog"></i> Pengaturan</p>
                </a>
              </li>
              <li>
                <form action="/logout" method="POST">
                @csrf
                  <button type="submit">
                    <p><i class="fas fa-sign-out-alt"></i> Logout</p>
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Navbar End -->

      <section class="main">
          @yield('container')
      </section>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
      // Fungsi Keluarin Modals
      function navbarToogle() {
        var container = document.querySelector(".link");
        container.classList.toggle("active");
      }
      const session = "{{Session::has('status')}}";
            if(session){
                Toastify({
                    text: "{{Session::get('status')}}",
                    className: "info",
                    style: {
                    background: "linear-gradient(to right, #0790E8, #14328A))",
                    }
                }).showToast();
            }
    </script>
  </body>
</html>
