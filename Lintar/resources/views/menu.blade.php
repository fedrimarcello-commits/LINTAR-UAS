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
        <tr>
            <td>3</td>
            <td><a href="/kehadiran">Kehadiran</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td><a href="/status-kuliah">Status Kuliah</a></td>
        </tr>
        <tr>
            <td>5</td>
            <td><a href="/kalender">Kalender Akademik</a></td>
        </tr>
        <tr>
            <td>6</td>
            <td><a href="/jadwal">Jadwal Kuliah</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td><a href="/biodata">Biodata</a></td>
        </tr>
        <tr>
            <td>8</td>
            <td><a href="/ubah-password">Ubah Password</a></td>
        </tr>
        <tr>
            <td>9</td>
            <td><a href="/ubah-nohp">Ubah No HP</a></td>
        </tr>
        <tr>
            <td>10</td>
            <td><a href="/ksm">Kartu Studi Mahasiswa</a></td>
        </tr>
    </table>
    <br>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>