<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#004AAD">
    <title>absensi smp rahman wahid</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ asset('icon-512.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon-512.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule kontainer utama untuk website absensi -->
    <div id="appCapsule" class="pt-0">
        <!-- login-form bagian untuk formulir login -->
        <div class="login-form mt-1">
            <div class="section">
                <!-- img src untuk menampilkan gambar yang berupa logo -->
                <img src="{{ asset('assets/img/login/logo.png') }}" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>Selamat datang di sistem absensi guru smp rahman wahid</h1>
                <h4>Silahkan login terlebih dahulu</h4>
            </div>
            <div class="section mt-1 mb-5">
                <!--  Menggunakan sintaks Blade untuk menampilkan pesan peringatan jika ada. -->
                @php
                    $messagewarning = Session::get('warning');
                @endphp
                @if (Session::get('warning'))
                    <div class="alert alert-outline-warning">
                        {{ $messagewarning }}
                    </div>
                @endif
                <!-- Formulir untuk login yang mengarah ke /proseslogin dengan metode POST -->
                <form action="/proseslogin" method="POST">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="nik" class="form-control" id="nik" maxlength="15" placeholder="Username">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password" maxlength="15" name="password"
                                placeholder="Password">
                            <span class="input-icon-right" style="position: absolute; right:8px; top:10px; cursor: pointer;" id="show_hide_password">
                                <ion-icon name="eye-off-outline" style="font-size: 1.5rem"></ion-icon>
                            </span>
                        </div>
                    </div>

                    <p>
                        <a href="{{ url('/panel') }}">Klik di sini untuk login sebagai admin</a>
                    </p>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Log in</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->

    <script>
        var BASE_URL = "{{ url('/') }}/";
        //alert(BASE_URL);
        document.addEventListener('DOMContentLoaded', init, false);

        function init() {
            if ('serviceWorker' in navigator && navigator.onLine) {
                navigator.serviceWorker.register(BASE_URL + 'service-worker.js')
                    .then((reg) => {
                        console.log('Registrasi service worker Berhasil', reg);
                    }, (err) => {
                        console.error('Registrasi service worker Gagal', err);
                    });
            }
        }
    </script>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('assets/js/base.js') }}"></script>

    <script>
        $(function() {
            $("#show_hide_password").click(function(e) {
                e.preventDefault();
                if ($("#password").attr("type") == "text") {
                    $("#password").attr("type", "password");
                    $("#show_hide_password ion-icon").attr("name", "eye-off-outline");
                } else if ($("#password").attr("type") == "password") {
                    $("#password").attr("type", "text");
                    $("#show_hide_password ion-icon").attr("name", "eye-outline");
                }
            });
        });
    </script>

</body>

</html>

<!-- Struktur asset pada code di file login.blade.php 
    public/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   ├── base.js
│   │   └── lib/
│   │       ├── jquery-3.4.1.min.js
│   │       ├── bootstrap.min.js
│   │       ├── popper.min.js
│   └── img/
│       └── login/
│           └── logo.png
├── icon-512.png
├── manifest.json
-->