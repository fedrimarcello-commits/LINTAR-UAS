<!DOCTYPE html>
<html>
<head>
    <title>Buat Akun Lintar</title>
</head>
<body>
    <h1>Buat Akun</h1>

    @if(session('Errorp'))
        <p>{{ session('Errorp') }}</p>
    @endif

    <form method="POST" action="/register">
        @csrf 
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>
        Nama Lengkap: <br>
        <input type="text" name="nama" required><br><br>
        Email: <br>
        <input type="email" name="email" required><br><br>
        Password: <br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Daftar Sekarang</button>
    </form>
    <br>
    <a href="/login">Kembali ke Login</a>
</body>
</html>