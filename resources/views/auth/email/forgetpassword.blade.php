<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Reset Password</h2>
        </div>
        
        <p>Halo,</p>
        
        <p>Anda menerima email ini karena kami menerima permintaan reset password untuk akun Anda.</p>
        
        <p>Silahkan klik tombol di bawah ini untuk melanjutkan proses reset password:</p>
        
        <div style="text-align: center;">
            <a href="{{ route('reset.password.get', $token) }}" class="button">Reset Password</a>
        </div>
        
        <p>Link reset password ini akan kedaluwarsa dalam 60 menit.</p>
        
        <p>Jika Anda tidak meminta reset password, tidak ada tindakan lebih lanjut yang diperlukan.</p>
        
        <p>Salam,<br>
        Tim Absensi SMP Rahman Wahid</p>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} SMP Rahman Wahid. All rights reserved.</p>
        </div>
    </div>
</body>
</html> 