@extends('layout.main')
{{-- {{dd(Session::has('status'))}} --}}
@section('title', 'Dashboard')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@section('container')
<body>

<section class="dashboard">
    <div class="dashboard-info">
        <div class="info-costumer">
            <h4>Selamat datang, {{Auth::user()->nama_admin}}</h4>
            <p class="title">Informasi Pelanggan :</p>
            <p>Jumlah total pengguna : {{$userCount}}</p>
            <p>Jumlah total transaksi : {{$transaksiCount}}</p>
        </div>
        <div class="info-app">
            <h4>Ini adalah aplikasi Nebeng Admin</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, placeat! Laborum similique saepe veritatis ipsum doloremque sequi tempore sunt asperiores culpa architecto?</p>
        </div>
    </div>
    <h4> Aktivitas Terbaru </h4>
    <div class="dashboard-activity">
        <table>
                <thead>
                    <tr class="none">
                        <th></th>
                        <th>Nama</th>
                        <th>Alamat Jemput</th>
                        <th>Alamat Tujuan</th>
                        <th>Biaya</th>
                        <th>Penumpang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $rwt )
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>{{$rwt->User->nama_lengkap}}</td>
                        <td>{{$rwt->Pesanan->alamat_jemput}}</td>
                        <td>{{$rwt->Pesanan->alamat_tujuan}}</td>
                        <td>{{$rwt->Pesanan->total_bayar}}</td>
                        <td>{{$rwt->UserPenumpang->nama_lengkap}}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</section>

    <!-- <script>
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
    </script> -->

</body>

@endsection
