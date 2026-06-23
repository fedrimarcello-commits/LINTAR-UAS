<!DOCTYPE html>
<html>
<head>
    <title>Isi Biodata</title>
</head>
<body>
    <h1>Isi Biodata</h1>
    <p>NPM : {{ session('nim_aktif') }}</p>
    <p>Nama : {{ session('user_aktif') }}</p>
    <p>Biodata hanya dapat diisi satu kali dan tidak bisa diubah lagi.</p>

    @if(session('Error'))
        <p>{{ session('Error') }}</p>
    @endif

    <form method="POST" action="/biodata/isi">
        @csrf
        No. Rekening: <br>
        <input type="text" name="no_rekening"><br><br>
        Tempat Lahir: <br>
        <input type="text" name="tempat_lahir"><br><br>
        Tanggal Lahir: <br>
        <input type="text" name="tanggal_lahir"><br><br>
        Jenis Kelamin: <br>
        <input type="text" name="jenis_kelamin"><br><br>
        Agama: <br>
        <input type="text" name="agama"><br><br>
        Alamat: <br>
        <input type="text" name="alamat"><br><br>
        Telepon: <br>
        <input type="text" name="telepon"><br><br>
        Handphone: <br>
        <input type="text" name="handphone"><br><br>

        Asal Sekolah: <br>
        <input type="text" name="asal_sekolah"><br><br>
        No. Ijazah: <br>
        <input type="text" name="no_ijazah"><br><br>
        Tgl Ijazah: <br>
        <input type="text" name="tgl_ijazah"><br><br>

        Nama Orang Tua / Wali: <br>
        <input type="text" name="nama_ortu"><br><br>
        Alamat Orang Tua: <br>
        <input type="text" name="alamat_ortu"><br><br>
        Telepon Orang Tua: <br>
        <input type="text" name="telepon_ortu"><br><br>

        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/biodata">Kembali</a>
</body>
</html>
