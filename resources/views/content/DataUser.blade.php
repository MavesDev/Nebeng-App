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
                    <th>Alamat</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>092142621</td>
                    <td>0951-4040-3210</td>
                    <td>Washington DC</td>
                    <td>
                        <a class="fas fa-edit" href="#" onclick="showToogle()"></a>
                        <a class="fas fa-trash" href="#"></a>
                    </td>
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
                    <label for=""> Filter Content </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Filter Content </label>
                    <select>
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="txt-form">
                    <label for=""> Filter Content </label>
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
                        <a id="button-submit" onclick="showToogle()"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
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