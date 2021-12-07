@extends('layout.main2')
@section('title', 'Kelola Data User')

@section('content')

<div class="data-user">
    <div class="data-user-title">
        <h2> Kelola Data User</h2>
    </div>

    <!-- Ini bagian buat button search dan filter -->
    <div class="data-user-filter">
        <div class="data-user-button">
            <button onclick="modalToogle()"> Filter <i class="fas fa-filter"></i> </button>
        </div>

        <div class="data-user-search">
            <form action="">
                <input type="text" placeholder="Search here....">
                <button type="submit">Search <i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- ini buat tabelnya -->
    <div class="data-user-table">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>No Telepon</th>
                    <th>email</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                <tr>
                    {{-- Data yang ditampilkan dalam table kurang lengkap,tolong perluas--}}
                    <th>1</th>
                    <td>{{$dt->nama_lengkap}}</td>
                    <td>{{$dt->nis}}</td>
                    <td>{{$dt->no_telp}}</td>
                    <td>{{$dt->email}}</td>
                    <td>
                        <a class="fas fa-edit" href="#" onclick="showToogle()"></a>
                        <a class="fas fa-trash" href="#"></a>
                    </td>
                </tr>
                @endforeach
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
                    <label for=""> Jenis Kelamin </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Kendaraan </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Rating </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="button-form">
                    <button id="button-submit" type="submit"> Lets Filter! </button>
                    <a id="button-submit" onclick="modalToogle()"> Back </a>
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
                        <a id="button-submit" onclick="showToogle()"> Kembali </a>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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