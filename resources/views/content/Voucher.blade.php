@extends('layout.main2')

@section('title', 'Voucher')

@section('content')

<div class="voucher">

    <div class="voucher-title">
        <h2> voucher </h2>
    </div>

    <!-- Ini buat chat box nya -->
    <div class="voucher-box">
        <form action="">
            <div class="voucher-form">
                <input type="text" placeholder="Masukan Judul Voucher">
            </div>
            <div class="voucher-form">
                <textarea name="" id="" cols="30" rows="10" placeholder="Masukan Deskripsi Voucher"></textarea>
            </div>
            <div class="voucher-form voucher-form-exp">
                <select name="" id="">
                    <option value="#">Forever</option>
                </select>
                <p>Sampai</p>
                <select name="" id="">
                    <option value="#">Forever</option>
                </select>
            </div>
            <div class="voucher-form">
                <input type="text" placeholder="Masukan Harga Voucher">
            </div>
            <div class="voucher-form">
                <button id="voucher-submit" type="submit"> Buat </button>
            </div>
        </form>
    </div>

    <!-- Ini list yg voucher -->
    <div class="voucher-act-table">
        <ul>
            <li>
                <div class="voucher-act-content">
                    <div class="voucher-act-txt">
                        <h4>Voucher 11 11</h4>
                        <div class="voucher-act-reply">
                            <p> Lorem ipsum dolor sit amet. </p>
                        </div>
                    </div>
                    <div class="voucher-act-span">
                        <span><a class="fas fa-edit" href="#" onclick="showToogle()"></a></span>
                        <span><a class="fas fa-trash" href="#"></a></span>
                    </div>
                </div>
            </li>
            <li>
        </ul>
    </div>

    <div class="voucher-form-modals">
        <div class="form">
            <div class="text">
                <h1> Edit Voucher </h1>
                <form action="" method="post">
                    <div class="voucher-txt-form">
                        <input type="text" placeholder="Please fill this form...">
                    </div>
                    <div class="voucher-txt-form">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Masukan Deskripsi Voucher"></textarea>
                    </div>
                    <div class="voucher-txt-form">
                        <select name="" id="">
                            <option value="#">Forever</option>
                        </select>
                        <p> Sampai </p>
                        <select name="" id="">
                            <option value="#">Forever</option>
                        </select>
                    </div>
                    <div class="voucher-txt-form clear">
                        <input type="text" placeholder="Masukan Harga Voucher">
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

</div>

<script>
    // Fungsi Keluarin Modals Filter
    function modalToogle() {
        var container = document.querySelector('.modal-form');
        container.classList.toggle('active')
    }

    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.voucher-form-modals');
        container.classList.toggle('active')
    }
</script>

@endsection