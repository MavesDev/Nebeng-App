@extends('layout.main')

@section('title', 'Kelola Data')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<section class="data">
    <h4> Kelola Data </h4>
    <div class="data-search">
        <div class="data-filter">
            <div class="filters">
                <div class="filter">
                    <select name="" id="">
                        <option value="">All</option>
                    </select>
                </div>
                <div class="filter">
                    <select name="" id="">
                        <option value="">All</option>
                    </select>
                </div>
            </div>
            <form action="/keloladata" method="POST">
                @csrf
                <input type="text" name="search" placeholder="Cari disini">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="data-plus">
            <button onclick="showToogle()">Tambah</button>
        </div>
    </div>
    <div class="data-table">
        <table>
                <thead>
                    <tr class="none">
                        <th></th>
                        <th>Nama</th>
                        <th>Nomor Transaksi</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr onclick="editToogle()">
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>{{$dt->nama_lengkap}}</td>
                        <td>{{$dt->no_telp}}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>

    <div class="data-detail">
        <form class="detail">
            <div class="detail-title">
                <h3>Detail Data</h3>
                <a href="" class="fas fa-trash"></a>
            </div>
            <div class="detail-data">
                <label for="">NIS</label>
                <input type="text" placeholder="Masukan NIS">
            </div>
            <div class="detail-data">
                <label for="">Nama</label>
                <input type="text" placeholder="Masukan Nama">
            </div>
            <div class="detail-data">
                <label for="">Email</label>
                <input type="email" placeholder="Masukan Email">
            </div>
            <div class="detail-data">
                <label for="">Password</label>
                <input type="text" placeholder="Masukan Password">
            </div>
            <div class="detail-data">
                <label for="">Kendaraan</label>
                <input type="text" placeholder="Masukan Kendaraan">
            </div>
            <div class="detail-data">
                <label for="">No Telepon</label>
                <input type="text" placeholder="Masukan Nomor Telepon">
            </div>
            <div class="detail-data">
                <label for="">Jenis Kelamin</label>
                <select name="" id="">
                    <option value="" selected>Laki laki</option>
                    <option value="">Perempuan</option>
                </select>
            </div>
            <div class="detail-submit">
                <button> Edit </button>
                <a href="#"  onclick="editToogle()">Kembali</a>
            </div>
        </form>
        <div class="popup-bg" onclick="editToogle()"></div>
    </div>

    <div class="data-popup">
        <form class="popup">
            <div class="popup-title">
                <h3>Tambah Data</h3>
            </div>
            <div class="popup-data">
                <label for="">NIS</label>
                <input type="text" placeholder="Masukan NIS">
            </div>
            <div class="popup-data">
                <label for="">Nama</label>
                <input type="text" placeholder="Masukan Nama">
            </div>
            <div class="popup-data">
                <label for="">Email</label>
                <input type="email" placeholder="Masukan Email">
            </div>
            <div class="popup-data">
                <label for="">Password</label>
                <input type="text" placeholder="Masukan Password">
            </div>
            <div class="popup-data">
                <label for="">Kendaraan</label>
                <input type="text" placeholder="Masukan Kendaraan">
            </div>
            <div class="popup-data">
                <label for="">No Telepon</label>
                <input type="text" placeholder="Masukan Nomor Telepon">
            </div>
            <div class="popup-data">
                <label for="">Jenis Kelamin</label>
                <select name="" id="">
                    <option value="" selected>Laki laki</option>
                    <option value="">Perempuan</option>
                </select>
            </div>
            <div class="popup-submit">
                <button> Tambah </button>
                <a href="#"  onclick="showToogle()">Kembali</a>
            </div>
        </form>
        <div class="popup-bg" onclick="showToogle()"></div>
    </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!--  Fungsi Keluarin Modals Show -->
<script>
    function showToogle() {
        var container = document.querySelector('.data-popup');
        container.classList.toggle('active')
    }

    function editToogle() {
        var container = document.querySelector('.data-detail');
        container.classList.toggle('active')
    }
</script>
@endsection
