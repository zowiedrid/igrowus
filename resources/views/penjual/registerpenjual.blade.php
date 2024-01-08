<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROW US | REGISTER</title>
    <link rel="stylesheet" href="/css/registerpembeli.css">
</head>
<body>
    <div class="container">
        <div class="growus-logo">
            <<img src="images/logo-growus.png">
            </div>
        <h1>REGISTER</h1>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Alamat Email Anda">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password Anda">
            </div>
            <div class="form-group">
                <label for="re-password">Re-Password</label>
                <input type="password" name="re-password" id="re-password" placeholder="Konfirmasi Password Anda">
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" placeholder="Masukkan Nomor Telepon Anda">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
            </div>
            <div class="form-group">
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
            </div>
            <button type="submit" class="register-btn">Register</button>
        </form>
        <p class="created-by">Created by Capston KILKALA</p>
    </div>
</body>
</html>
