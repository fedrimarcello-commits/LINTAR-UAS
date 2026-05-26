<!DOCTYPE html>
<html>
<head>
    <title>Lintar MAHASISWA</title>
</head>
<body>
    <h1>Menu Utama</h1>
    <h2>{{ $nama }}</h2>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>