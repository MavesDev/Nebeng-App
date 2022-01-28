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
                    <input type="text" name="search" placeholder="Cari disini" id="search">
                    <button disabled><i class="fas fa-search"></i></button>
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
                        <th>Tanggal Mendaftar</th>
                    </tr>
                </thead>
                <tbody id="tabeluser">
                    {{-- @foreach ($data as $dt)
                    <tr onclick="editToogle()">
                        <td><img src="{{ url('image/None.png') }}" alt=""></td>
                        <td>{{$dt->nama_lengkap}}</td>
                        <td>{{$dt->tanggal_daftar}}</td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>

        <div class="data-detail">
            <form class="detail">
                <div class="detail-title">
                    <h3>Detail Data</h3>
                    <a class="fas fa-trash"></a>
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
                    <button type="button"> Edit </button>
                    <a href="#" onclick="editToogle()">Kembali</a>
                </div>
            </form>
            <div class="popup-bg" onclick="editToogle()"></div>
        </div>

        <div class="data-popup" id="popupTambah">
            <div class="popup">
                <div class="popup-title">
                    <h3>Tambah Data</h3>
                </div>
                <div class="popup-data">
                    <label for="">NIS</label>
                    <input type="text" placeholder="Masukan NIS" id="nisTmbh">
                </div>
                <div class="popup-data">
                    <label for="">Nama</label>
                    <input type="text" placeholder="Masukan Nama" id="nama_lengkapTmbh">
                </div>
                <div class="popup-data">
                    <label for="">Email</label>
                    <input type="email" placeholder="Masukan Email" id="emailTmbh">
                </div>
                <div class="popup-data">
                    <label for="">Password</label>
                    <input type="text" placeholder="Masukan Password" id="passwordTmbh">
                </div>
                <div class="popup-data">
                    <label for="">Kendaraan</label>
                    <input type="text" placeholder="Masukan Kendaraan" id="kendaraanTmbh">
                </div>
                <div class="popup-data">
                    <label for="">No Telepon</label>
                    <input type="text" placeholder="Masukan Nomor Telepon" id="no_telpTmbh">
                </div>
                <div class="popup-data">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelaminTmbh">
                        <option value="laki-laki" selected>Laki laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="popup-submit">
                    <button id="btnTambah"> Tambah </button>
                    <a href="#" onclick="showToogle()">Kembali</a>
                </div>
            </div>
            <div class="popup-bg" onclick="showToogle()"></div>
        </div>
    </section>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!--  Fungsi Keluarin Modals Show -->
    <script>
        $(document).ready(function() {
            // setInterval(() => {

            // }, 1000);
            $.ajax({
                    url: '/api/getuserdata',
                    async: true,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        // console.log(data.DataUserData);
                        for (var i = 0; i < data.DataUserData.length; i++) {
                            html += '<tr onclick="editToogle()" value="'+data.DataUserData[i].id+'">' +
                                '<td><img src="{{ url('image/None.png') }}" alt=""></td>' +
                                '<td>' + data.DataUserData[i].nama_lengkap + '</td>' +
                                '<td>' + data.DataUserData[i].tanggal_daftar + '</td>' +
                                '</tr></div>';
                        }
                        $('#tabeluser').html(html);
                    }
                });

            //CARI CARA DELETE DAN UPDATE
            $('.datauser').click(function(){
                console.log("hello");
            });

            //live search
            $('#search').on('keyup',function(){
                let keyword = $(this).val();
                $.ajax({
                    type:'GET',
                    url: window.location.origin + '/searchuser',
                    data: {'keyword':keyword},
                    success:function(data){
                        $('#tabeluser').html(data);
                    }
                });
            })

            //baru menambahkan tambah data dan asyncronus table user
            $('#btnTambah').click(function() {
                var nis = $('#nisTmbh').val();
                var nama_lengkap = $('#nama_lengkapTmbh').val();
                var email = $('#emailTmbh').val();
                var password = $('#passwordTmbh').val();
                var kendaraan = $('#kendaraanTmbh').val();
                var no_telp = $('#no_telpTmbh').val();
                var jenis_kelamin = $('#jenis_kelaminTmbh').val();
                // console.log(nis);
                // console.log(nama_lengkap);
                // console.log(email);
                // console.log(password);
                // console.log(kendaraan);
                // console.log(no_telp);
                // console.log(jenis_kelamin);
                $.ajax({
                    type: 'POST',
                    url: window.location.origin + '/tambahuser',
                    data: {
                        'nis': nis,
                        'nama_lengkap': nama_lengkap,
                        'email': email,
                        'password': password,
                        'kendaraan': kendaraan,
                        'no_telp': no_telp,
                        'jenis_kelamin': jenis_kelamin
                    },
                    success: function(data) {
                        Toastify({
                            text: "Data Berhasil Ditambahkan",
                            className: "info",
                            style: {
                                background: "#2ecc71",
                            }
                        }).showToast();
                    },
                    error: function() {
                        Toastify({
                            text: "Data Gagal Ditambahkan",
                            className: "info",
                            style: {
                                background: "#e74c3c",
                            }
                        }).showToast();
                    }
                })
            });
        });

        function showToogle() {
            var container = document.querySelector('.data-popup');
            container.classList.toggle('active')
        }

        function editToogle() {
            var container = document.querySelector('.data-detail');
            container.classList.toggle('active')
        }
        // function editToogle(let id) {
        //     console.log(id);
        //     var container = document.querySelector('.data-detail-'+id);
        //     container.classList.toggle('active')
        // }
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
