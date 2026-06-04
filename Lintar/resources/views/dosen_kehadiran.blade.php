<!DOCTYPE html>
<html>
<head>
    <title>Input Kehadiran</title>
</head>
<body>
    <h1>Input Kehadiran</h1>

    @if(session('Pesan'))
        <p>{{ session('Pesan') }}</p>
    @endif

    <form method="POST" action="/dosen/kehadiran">
        @csrf
        NIM: <br>
        <input type="text" name="nim" required><br><br>
        Kode MK: <br>
        <input type="text" name="kode_mk" required><br><br>
        Jumlah Pertemuan: <br>
        <input type="text" name="jumlah_pertemuan"><br><br>
        Jumlah Kehadiran: <br>
        <input type="text" name="jumlah_kehadiran"><br><br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/dosen">Kembali ke Menu</a>
</body>
</html>
