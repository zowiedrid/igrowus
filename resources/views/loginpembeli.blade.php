<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROW US | Pembeli</title>
    <link rel="stylesheet" href="/loginpembeli.css">
</head>

<body>

    <div class="container">
        <div class="growus-logo">
            <img src="/images/logo-growus.png" alt="Logo GROW US">
        </div>
        <h1>Pembeli</h1>

        <form action="{{ route('loginpembeli') }}" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    placeholder="Masukkan Alamat Email Anda" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    placeholder="Masukkan Password Anda" required>
                            </div>

                            <div class="form-group">
                                <a href="#">Lupa Kata Sandi?</a>
                            </div>

                            <button type="submit" class="login-btn">Login</button>
        </form>

        <p class="register-link">Belum punya akun? <a href="register.php">Register</a></p>
        <p class="created-by">Created by Capston KILKALA</p>
    </div>

</body>

</html>
