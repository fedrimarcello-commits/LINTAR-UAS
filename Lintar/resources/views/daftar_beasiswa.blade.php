<!DOCTYPE html>
<html>
<head>
    <title>Daftar Beasiswa</title>
</head>
<body>
    <h2>BEASISWA - DAFTAR BEASISWA</h2>

    @if(count($syarat) > 0)
        <p>Mohon Maaf, anda tidak dapat mendaftar Beasiswa Karena tidak memenuhi persyaratan berikut:</p>
        <ul>
            @foreach($syarat as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Anda memenuhi persyaratan untuk mendaftar beasiswa.</p>
    @endif

    <br>
    <a href="/menu">Kembali</a>
</body>
</html>
