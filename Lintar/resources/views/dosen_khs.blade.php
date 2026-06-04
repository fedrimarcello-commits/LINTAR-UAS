<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai KHS</title>
</head>
<body>
    <h1>Input Nilai KHS</h1>

    @if(session('Pesan'))
        <p>{{ session('Pesan') }}</p>
    @endif

    <form method="POST" action="/dosen/khs">
        @csrf
        NIM: <br>
        <input type="text" name="nim" required><br><br>
        Kode MK: <br>
        <input type="text" name="kode_mk" required><br><br>
        Nilai Huruf: <br>
        <input type="text" name="nilai_huruf"><br><br>
        Nilai Angka: <br>
        <input type="text" name="nilai_angka"><br><br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/dosen">Kembali ke Menu</a>
</body>
</html>
