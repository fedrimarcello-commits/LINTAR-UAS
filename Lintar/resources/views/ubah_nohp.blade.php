<!DOCTYPE html>
<html>
<head>
    <title>Ubah No HP</title>
</head>
<body>
    <h1>Ubah No HP</h1>

    @if(session('Sukses'))
        <p>{{ session('Sukses') }}</p>
    @endif

    <p>No HP sekarang : {{ $data->handphone }}</p>

    <form method="POST" action="/ubah-nohp">
        @csrf
        No HP Baru: <br>
        <input type="text" name="handphone" required><br><br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/biodata">Kembali</a>
</body>
</html>
