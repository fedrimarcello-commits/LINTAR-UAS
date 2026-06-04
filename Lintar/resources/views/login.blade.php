<!DOCTYPE html>
<html>
<head>
    <title>Login Lintar</title>
</head>
    <body>
    <h1>Login</h1>

    @if(session('Error'))
        <p>{{ session('Error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        Login sebagai: <br>
        <input type="radio" name="peran" value="mahasiswa" checked onclick="document.getElementById('daftar').style.display='block'"> Mahasiswa
        <input type="radio" name="peran" value="dosen" onclick="document.getElementById('daftar').style.display='none'"> Dosen<br><br>
        Email: <br>
        <input type="email" name="email" required><br><br>
        Password: <br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Masuk</button>
    </form>
    <br>
    <p id="daftar"><a href="/register">Belum Punya Akun ? Buat akun baru</a></p>
    </body>
</html>