@extends('layout.main2')

@section('title', 'Rekap')

@section('content')

<div class="rekap">
    <div class="rekap-title">
        <h2> Rekap </h2>
    </div>

    <!-- Ini bagian buat button search dan filter -->
    <div class="rekap-filter">
        <div class="rekap-button">
            <button onclick="modalToogle()"> Filter <i class="fas fa-filter"></i> </button>
        </div>

        <div class="rekap-search">
            <form action="">
                <input type="text" placeholder="Search here....">
                <button type="submit">Search <i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- ini buat tabelnya -->
    <div class="rekap-table">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Alamat Jemput</th>
                    <th>Tujuan</th>
                    <th>Harga</th>
                    <th>Kendaraan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>John Smith</td>
                    <td>11 Oktober 2021</td>
                    <td>SMKN 1 KATAPANG</td>
                    <td>Miko mall jalan sayati no 3 Bandung, Indonesia</td>
                    <td>Rp12.0000</td>
                    <td>NMAX</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Adam Manhattan</td>
                    <td>4 Oktober 2021</td>
                    <td>SMKN 1 KATAPANG</td>
                    <td>Ramen Bajuri, Gandasoli No 3</td>
                    <td>Rp19.0000</td>
                    <td>Vario</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modals untuk filter -->
    <div class="modal-form">
        <div class="form">
            <div class="text">
                <h1> Filter </h1>
            </div>
            <form action="" method="post">
                <div class="txt-form">
                    <label for=""> Bulan </label>
                    <select>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Tahun </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="button-form">
                    <button id="button-submit" type="submit"> Filter </button>
                    <a id="button-submit" onclick="modalToogle()"> Kembali </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal buat edit, maapkan males ganti class lagi :D -->
    <div class="show-form">
        <div class="form">
            <div class="text">
                <h1> Edit User </h1>
                <form action="" method="post">
                    <div class="txt-form">
                        <label for=""> User Profile </label>
                        <input type="text" placeholder="Please fill this form...">
                    </div>
                    <div class="txt-form">
                        <label for=""> User Profile </label>
                        <input type="text" placeholder="Please fill this form...">
                    </div>
                    <div class="button-form">
                        <button id="button-submit" type="submit"> Edit </button>
                        <a id="button-submit" onclick="showToogle()"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mobile-warning">
    <i class="fas fa-exclamation-circle"></i>
    <h3>Halaman Ini Tidak Mendukung Ukuran Web Ini</h3>
</div>

<script>
    // Fungsi Keluarin Modals Filter
    function modalToogle() {
        var container = document.querySelector('.modal-form');
        container.classList.toggle('active')
    }

    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.show-form');
        container.classList.toggle('active')
    }
</script>

@endsection