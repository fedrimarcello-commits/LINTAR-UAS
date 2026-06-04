<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai UTS</title>
</head>
<body>
    <h1>Input Nilai UTS</h1>

    @if(session('Pesan'))
        <p>{{ session('Pesan') }}</p>
    @endif

    <form method="POST" action="/dosen/uts">
        @csrf
        NIM: <br>
        <input type="text" name="nim" required><br><br>
        Kode MK: <br>
        <input type="text" name="kode_mk" required><br><br>
        Nilai: <br>
        <input type="text" name="nilai"><br><br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/dosen">Kembali ke Menu</a>
</body>
</html>
