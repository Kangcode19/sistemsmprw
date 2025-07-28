<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login - admin</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/demo.min.css?1674944402') }}" rel="stylesheet" />
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        <!-- memasukan font -->
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

    </style>
</head>
<body class=" d-flex flex-column">
    <script src="{{ asset('tabler/dist/js/demo-theme.min.js?1674944402') }}"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="card card-md">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
                                    <img src="{{ asset('tabler/static/illustrations/logosmp.png') }}" height="90" alt="Logo">
                                </div>
                                <h2 class="h2 text-center mb-4">Selamat datang di dashboard admin sistem absensi smp rahman wahid</h2>
                                @if (Session::get('warning'))
                                <div class="alert alert-warning">
                                    <p>{{ Session::get('warning') }}</p>
                                </div>
                                @endif
                                <form action="/prosesloginadmin" method="post" autocomplete="off" novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Masukan alamat email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Masukan email anda" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Masukan password</label>
                                        <div class="input-group input-group-flat">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password" autocomplete="off">
                                            <span class="input-group-text" style="cursor: pointer;" id="show_hide_password">
                                                <ion-icon name="eye-off-outline" style="font-size: 1.5rem"></ion-icon>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-center text-muted mt-3 mb-3">
                                        <a href="{{ route('forget.password.get') }}">Lupa password?</a>
                                    </div>
                                    <p>
                                        <a href="{{ url('/') }}">Kembali ke login pegawai</a>
                                    </p>
                                    <div class="mb-2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <span class="form-check-label">Ingat saya di perangkat ini</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js?1674944402') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js?1674944402') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            
            // SweetAlert untuk notifikasi sukses reset password
            @if(Session::has('success') && Session::has('alert-type'))
                Swal.fire({
                    title: 'Berhasil!',
                    text: "{{ Session::get('success') }}",
                    icon: "{{ Session::get('alert-type') }}",
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            @endif
        });
    </script>
</body>
</html>
