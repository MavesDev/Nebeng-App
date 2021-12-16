@extends('layout.main2')

@section('title', 'Detail')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<div class="show">
    <h2>Detail</h2>

    <div class="show-bg">
        <div class="show-title">
            <div class="show-photo">
                <img src="{{ asset('/image/face/s.png') }}" alt="">
            </div>
            <div class="show-name">
                <h4>{{$data->nama_lengkap}}</h4>
                <p>{{$data->no_telp}}</p>
            </div>
            <div class="show-link">
                <a href="#" onclick="showToogle()"><i class="fas fa-edit"></i></a>
                <form action="/keloladata/hapus/{{$data->id}}" method="POST">
                    @csrf
                    <button><i class="fas fa-trash"></i></button>
                </form>
            </div>
        </div>
        <div class="show-content">
            <div class="show-desc">
                <label for="">Email</label>
                <p>{{$data->email}}</p>
            </div>
            <div class="show-desc">
                <label for="">No. Telp</label>
                <p>{{$data->no_telp}}</p>
            </div>
            <div class="show-desc">
                <label for="">Jenis Kelamin</label>
                <p>{{$data->jenis_kelamin}}</p>
            </div>
            <div class="show-desc">
                <label for="">Tanggal Daftar</label>
                <p>{{$data->created_at}}</p>
            </div>
            <div class="show-desc">
                <label for="">Kendaraan</label>
                @if ($data->kendaraan != null)
                <p>{{$data->Kendaraan->merk_kendaraan}}</p>
                @else
                <p>-</p>
                @endif
            </div>
            <div class="show-desc">
                <label for="">Rating</label>
                <p>{{$data->rating}}</p>
            </div>
        </div>
    </div>

    <div class="show-form">
        <div class="form">
            <div class="text">
                <h1> Edit User </h1>
                <form action="/keloladata/edit/{{$data->id}}" method="POST">
                    @csrf
                    <div class="txt-form">
                        <label for=""> Nis </label>
                        <input type="text" placeholder="Nis..." value="{{$data->nis}}" name="nis">
                    </div>
                    <div class="txt-form">
                        <label for=""> Nama Lengkap </label>
                        <input type="text" placeholder="Nama..." value="{{$data->nama_lengkap}}" name="nama_lengkap">
                    </div>
                    <div class="txt-form">
                        <label for=""> Email </label>
                        <input type="text" placeholder="Email..." value="{{$data->email}}" name="email">
                    </div>
                    <div class="txt-form">
                        <label for=""> No Telepon </label>
                        <input type="text" placeholder="NoTelepon..." value="{{$data->no_telp}}" name="no_telp">
                    </div>
                    <div class="txt-form">
                        <label for=""> Jenis Kelamin </label>
                        <select name="jenis_kelamin" id="">
                            <option value="laki-laki" {{$data->jenis_kelamin == 'laki-laki' ? 'selected':''}}>Laki-Laki</option>
                            <option value="perempuan" {{$data->jenis_kelamin == 'perempuan' ? 'selected':''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="txt-form">
                        <label for=""> Password </label>
                        <input type="password" placeholder="Password..." value="{{$data->password}}" name="password">
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    // Fungsi Keluarin Modals Show
    function showToogle() {
        var container = document.querySelector('.show-form');
        container.classList.toggle('active')
    }

      // Fungsi Keluarin Modals
      function loginToogle() {
            var container = document.querySelector('.login-form');
            container.classList.toggle('active')
        }

</script>

@endsection
