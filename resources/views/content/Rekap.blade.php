@extends('layout.main')

@section('title', 'Rekap')

@section('container')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<section class="data">
    <h4> Rekap </h4>
    <div class="data-search">
        <div class="data-filter">
            <div class="filters">
                <div class="filter">
                    <select name="bulan" id="">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="filter">
                    <select name="tahun" id="">
                        @for ($i = 2020; $i <= date('Y'); $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            {{-- <form action="">
                <input type="text" placeholder="Cari disini">
                <button><i class="fas fa-search"></i></button>
            </form> --}}
        </div>
        {{-- <div class="data-plus">
            <button onclick="showRekap()">Filter</button>
        </div> --}}
    </div>
    <div class="data-table">
        <table>
                <thead>
                    <tr class="none">
                        <th></th>
                        <th>Nama</th>
                        <th>Penumpang</th>
                        <th>Alamat Jemput</th>
                        <th>Alamat Tujuan</th>
                        <th>Kendaraan</th>
                        <th>Biaya</th>
                        <th>Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $rekap )
                    <tr>
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>{{$rekap->User->nama_lengkap}}</td>
                        <td>{{$rekap->UserPenumpang->nama_lengkap}}</td>
                        <td>{{$rekap->Pesanan->alamat_jemput}}</td>
                        <td>{{$rekap->Pesanan->alamat_tujuan}}</td>
                        <td>{{$rekap->User->Kendaraan->type_kendaraan ."|". $rekap->User->Kendaraan->merk_kendaraan}}</td>
                        <td>{{$rekap->Pesanan->total_bayar}}</td>
                        <td>{{$rekap->Pesanan->created_at}}</td>
                    </tr>
                    @endforeach
                    {{-- <tr>
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
                    </tr> --}}
                </tbody>
        </table>
    </div>

    <div class="rekap-popup">
        <form class="popup">
            <div class="popup-title">
                <h3>Filter Data</h3>
            </div>
            <div class="popup-data">
                <label for="">Bulan</label>
                <select name="" id="">
                    <option value="" selected>Juni</option>
                    <option value="">Mei</option>
                </select>
            </div>
            <div class="popup-data">
                <label for="">Tahun</label>
                <select name="" id="">
                    <option value="" selected>2022</option>
                    <option value="">2021</option>
                </select>
            </div>
            <div class="popup-submit">
                <button> Filter </button>
                <a href="#"  onclick="showRekap()">Kembali</a>
            </div>
        </form>
        <div class="popup-bg" onclick="showRekap()"></div>
    </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!--  Fungsi Keluarin Modals Show -->
<script>
    function showRekap() {
        var container = document.querySelector('.rekap-popup');
        container.classList.toggle('active')
    }
</script>
@endsection
