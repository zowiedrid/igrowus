<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>GROW US | REGISTER</title>
    <link rel="stylesheet" href="/css/registerpembeli.css">
</head>

<body>
    <div class="container">
        <div class="growus-logo">
            <img src="images/logo-growus.png">
        </div>
        <h1>REGISTER</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/create" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" value="{{ Session::get('name') }}" 
                    placeholder="Masukkan Nama Lengkap Anda">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email"
                    placeholder="Masukkan Alamat Email Anda">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" value="{{ Session::get('password') }}" name="password"
                    placeholder="Masukkan Password Anda">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role">
                  <option value="">Pilih Role</option>
                  <option value="pembeli">Pembeli</option>
                  <option value="penjual">Penjual</option>
                </select>
              </div>
            {{-- <div class="form-group">
                <label for="re-password">Re-Password</label>
                <input type="password" name="re-password" id="re-password" placeholder="Konfirmasi Password Anda">
            </div> --}}
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" value="{{ Session::get('no_hp') }}" name="no_hp"
                    placeholder="Masukkan Nomor Hp Anda">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" value="{{ Session::get('alamat') }}" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="kota_kabupaten">Kota/Kabupaten</label>
                <select name="kota_kabupaten" id="kota_kabupaten">
                    <option value="">Pilih Kota/Kabupaten</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <select name="kecamatan" id="kecamatan">
                    <option value="">Pilih Kecamatan</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
                <select name="kelurahan" id="kelurahan">
                    <option value="">Pilih Kelurahan</option>
                    </select>
            </div> --}}
            <button type="submit" class="register-btn">Register</button>
        </form>
        <p class="created-by">Created by Capston KILKALA</p>
    </div>
</body>

</html>
