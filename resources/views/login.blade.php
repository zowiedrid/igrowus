<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>GROW US | Login</title>
    <link rel="stylesheet" href="/css/loginpenjual.css">
</head>

<body>
    <div class="container ">
        <div class="growus-logo">
            <img src="images/logo-growus.png">
        </div>
        <h1>Login</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                    placeholder="Masukkan Alamat Email Anda">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
            </div>
            <div class="form-group">
                <a href="#">Lupa Kata Sandi?</a>
            </div>

            <button name="submit" type="submit" class="login-btn">Login</button>

            <p class="register-link">Belum punya akun ? <a href="register.php">Register</a></p>
            <p style="text-align: center" <p class="created-by">Created by Capston KILKALA</p>
        </form>
    </div>
</body>

</html>
