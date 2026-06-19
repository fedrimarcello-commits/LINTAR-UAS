<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Pengajuan</title>
</head>
<body>
    <h2>BEASISWA - UNGGAH FILE PENGAJUAN</h2>

    <p>Tahun Akademik : 20252 - Tahun Akademik Genap 2025</p>

    @if(count($syarat) > 0)
        <p>Mohon Maaf, anda tidak dapat mendaftar Beasiswa Karena tidak memenuhi persyaratan berikut:</p>
        <ul>
            @foreach($syarat as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <form method="POST" action="/unggah-file" enctype="multipart/form-data">
            @csrf
            File Pengajuan : <br>
            <input type="file" name="file"><br><br>
            <button type="submit">Unggah</button>
        </form>
    @endif

    <br>
    <a href="/menu">Kembali</a>
</body>
</html>
