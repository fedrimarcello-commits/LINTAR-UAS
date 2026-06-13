<!DOCTYPE html>
<html>
<head>
    <title>Konsultasi PA</title>
</head>
<body>

    <h2>KONSULING PA - KONSULTASI PA</h2>

    @if(session('Sukses'))
        <p>{{ session('Sukses') }}</p>
    @endif

    <form method="POST" action="/konsultasi-pa">
        @csrf
        <table border="1">
            <tr>
                <td>NIM</td>
                <td>{{ $nim }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <td>Nama PA</td>
                <td>Bapak/Ibu MANATAP DOLOK LAURO (10813003)</td>
            </tr>
            <tr>
                <td>Isi Permasalahan</td>
                <td><textarea name="isi" rows="5" cols="80"></textarea></td>
            </tr>
        </table>
        <br>
        <button type="submit">Kirim Pesan</button>
        <a href="/konsultasi-pa">Refresh</a>
    </form>

    <br>
    <a href="/menu">Kembali</a>

</body>
</html>
