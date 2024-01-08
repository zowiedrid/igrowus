<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/homepage_style.css">
    <title>GrowUs App</title>
</head>
<body>
    <div class="homepage">
        <header>
            <img src="images/logo-growus.png">
        </header>

        <div class="content">
            <div class="option">
                <a href="{{ url('/login-penjual') }}">
                    <img src="images/logo-penjual.png">
                    <h2>Penjual</h2>
                </a>
            </div>
            <div class="option">
                <a href="{{ url('/login-pembeli') }}">
                    <img src="images/logo-pembeli.png">
                    <h2>Pembeli</h2>
                </a>
            </div>
        </div>

        <div class="illustration">
            <img class="image" src="{{ asset('img/image-18.png') }}" alt="Illustration">
            <img class="line" src="{{ asset('img/line-5.svg') }}" alt="Line">
        </div>

        <footer>
            <p class="text-wrapper-3">Created by Capston KILKALA</p>
        </footer>
    </div>
</body>
</html>
