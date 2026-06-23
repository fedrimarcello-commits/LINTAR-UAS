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
    <h3>Riwayat Konsultasi</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Waktu</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
        @foreach($riwayat as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->waktu }}</td>
            <td>{{ $item->isi }}</td>
            <td>
                <form method="POST" action="/konsultasi-pa/hapus">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <br>
    <a href="/menu">Kembali</a>

</body>
</html>
