@extends('layout.main')
{{-- {{dd(Session::has('status'))}} --}}
@section('title', 'Dashboard')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@section('container')
<body>

<section class="dashboard">
    <div class="dashboard-info">
        <div class="info-costumer">
            <h4>Selamat datang, John!</h4>
            <p class="title">Informasi Pelanggan :</p>
            <p>Jumlah total pengguna : 23</p>
            <p>Jumlah total transaksi : 46</p>
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
                        <th>Nomor Transaksi</th>
                        <th>Alamat</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>Raqhin Kusmanadinata</td>
                        <td>098689765</td>
                        <td>Sanggar indah banjaran blok G2</td>
                        <td>Rp.5000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>Raqhin Kusmanadinata</td>
                        <td>098689765</td>
                        <td>Sanggar indah banjaran blok G2</td>
                        <td>Rp.5000</td>
                    </tr>
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>Raqhin Kusmanadinata</td>
                        <td>098689765</td>
                        <td>Sanggar indah banjaran blok G2</td>
                        <td>Rp.5000</td>
                    </tr>
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
