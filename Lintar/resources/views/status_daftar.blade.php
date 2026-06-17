<!DOCTYPE html>
<html>
<head>
    <title>Info Status Pendaftar</title>
</head>
<body>
    <h2>BEASISWA-INFO STATUS PENDAFTAR</h2>
    @if(count($syarat) > 0)
        <p>Mohon Maaf, anda tidak dapat mendaftar Beasiswa Karena tidak memenuhi persyaratan berikut:</p>
        <ul>
            @foreach($syarat as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Pendaftaran beasiswa anda sedang diproses.</p>
    @endif

    <br>
    <a href="/menu">Kembali</a>
</body>
</html>
