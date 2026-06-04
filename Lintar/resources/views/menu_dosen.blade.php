<!DOCTYPE html>
<html>
<head>
    <title>Lintar DOSEN</title>
</head>
<body>
    <h1>Menu Dosen</h1>
    <h2>{{ $nama }}</h2>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Input Data Mahasiswa</th>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="/dosen/uts">Input Nilai UTS</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="/dosen/khs">Input Nilai KHS</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td><a href="/dosen/kehadiran">Input Kehadiran</a></td>
        </tr>
    </table>
    <br>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>
