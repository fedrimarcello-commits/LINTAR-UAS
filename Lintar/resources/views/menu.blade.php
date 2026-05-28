<!DOCTYPE html>
<html>
<head>
    <title>Lintar MAHASISWA</title>
</head>
<body>
    <h1>Menu Utama</h1>
    <h2>{{ $nama }}</h2>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Menu Akademik</th>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="/nilai-uts">Nilai UTS</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="/nilai-khs">Nilai KHS</a></td>
        </tr>
            <td>3</td>
            <td><a href="/kalender">Kalender Akademik</a></td>
        </tr>
        </tr>
            <td>4</td>
            <td><a href="/jadwal">Jadwal Kuliah</a></td>
        </tr>
    </table>
    <br>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>