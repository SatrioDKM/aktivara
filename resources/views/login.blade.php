<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aktivara</title>
    <style>
    /* Reset margin dan padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Style background */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #0e2238;
    }

    /* Card Container */
    .login-container {
        background-color: #ffffff;
        padding: 40px;
        width: 100%;
        max-width: 400px;
        border-radius: 8px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    /* Header */
    .login-container h2 {
        margin-bottom: 24px;
        color: #333;
        font-size: 24px;
    }

    /* Input style */
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    /* Button style */
    .login-container button {
        width: 100%;
        margin-top: 20px;
        padding: 12px;
        background-color: #6e8efb;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-container button:hover {
        background-color: #5a76d4;
    }

    /* Error messages */
    .error {
        color: #e74c3c;
        font-size: 14px;
        margin-top: 8px;
    }

    /* Link style */
    .login-container a {
        display: block;
        margin-top: 16px;
        color: #6e8efb;
        text-decoration: none;
        font-size: 14px;
    }

    .login-container a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="{{ asset('images/AktivaraLogo.png') }}" alt="Aktivara Logo" style="width: 300px; height: auto; margin-top: 1px;">
        <!-- Error message -->
        @if ($errors->any())
        <div class="error">
            <p>{{ $errors->first() }}</p>
        </div>
        @endif

        <!-- Form Login -->
        <form action=" " method="POST">
            @csrf
            <input type="text" name="NIK" id="NIK" maxlength="20" title="Nomor Induk Karyawan"
                placeholder="Nomor Induk Karyawan" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="form-check" style="margin-top: 3%">
                <input type="checkbox" class="form-check-input" id="remember">
                     <label class="form-check-label" for="remember">Simpan Nomor Induk Karyawan</label>
            </div>
            <button type="button">Login</button>
        </form>
    </div>
</body>

</html>