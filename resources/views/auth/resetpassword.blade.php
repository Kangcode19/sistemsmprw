<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Reset Password - Admin</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/demo.min.css?1674944402') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body class="d-flex flex-column">
    <script src="{{ asset('tabler/dist/js/demo-theme.min.js?1674944402') }}"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="{{ url('/panel') }}" class="navbar-brand">
                                <img src="{{ asset('tabler/static/illustrations/logosmp.png') }}" height="90" alt="Logo">
                            </a>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Reset Password</h2>
                                
                                @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                <form action="{{ route('reset.password.post') }}" method="post" autocomplete="off">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Alamat Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required autofocus>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Password Baru</label>
                                        <div class="input-group input-group-flat">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password baru" required>
                                            <span class="input-group-text" style="cursor: pointer;" id="show_hide_password">
                                                <ion-icon name="eye-off-outline" style="font-size: 1.5rem"></ion-icon>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Konfirmasi Password</label>
                                        <div class="input-group input-group-flat">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi password baru" required>
                                            <span class="input-group-text" style="cursor: pointer;" id="show_hide_password_confirm">
                                                <ion-icon name="eye-off-outline" style="font-size: 1.5rem"></ion-icon>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Reset Password</button>
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
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
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
            
            $("#show_hide_password_confirm").click(function(e) {
                e.preventDefault();
                if ($("#password_confirmation").attr("type") == "text") {
                    $("#password_confirmation").attr("type", "password");
                    $("#show_hide_password_confirm ion-icon").attr("name", "eye-off-outline");
                } else if ($("#password_confirmation").attr("type") == "password") {
                    $("#password_confirmation").attr("type", "text");
                    $("#show_hide_password_confirm ion-icon").attr("name", "eye-outline");
                }
            });
        });
    </script>
</body>
</html> 