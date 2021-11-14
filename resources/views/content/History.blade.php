@extends('layout.main2')

@section('title', 'History')

@section('content')

<div class="history">
    <div class="history-title">
        <h2> History</h2>
    </div>

    <!-- Sama buat filter ama search -->
    <div class="history-filter">
        <div class="history-button">
            <button onclick="filterToogle()"> Filter <i class="fas fa-filter"></i> </button>
        </div>

        <div class="history-search">
            <form action="">
                <input type="text" placeholder="Search here....">
                <button type="submit">Search <i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="history">
        <!-- Bagian Tabel History -->
        <div class="history-table">
            <ul>
                <li>
                    <div class="history-content">
                        <img src="{{ url('../image/none.png') }}" alt="" id="history-image">
                        <div class="history-txt">
                            <p>Nama</p>
                            <p>Ini keterangan</p>
                        </div>
                        <div class="history-span">
                            <span><a class="fas fa-eye" href="#" onclick="showToogle()"></a></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Modals untuk filter -->
    <div class="filter-form">
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

    <!-- Ini modal buat form detail history -->
    <div class="history-form">
        <div class="form">
            <div class="text">
                <h1> Detail History </h1>
                <form action="" method="post">
                    <div class="txt-form">
                        <label for=""> History Content </label>
                        <input type="text" value="This Form is Full!" disabled>
                    </div>
                    <div class="txt-form">
                        <label for=""> History Content </label>
                        <input type="text" value="This Form is Full!" disabled>
                    </div>
                    <div class="button-form">
                        <a id="button-submit" onclick="showToogle()"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi Keluarin Modals Filter
    function filterToogle() {
        var container = document.querySelector('.filter-form');
        container.classList.toggle('active')
    }

    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.history-form');
        container.classList.toggle('active')
    }
</script>

@endsection