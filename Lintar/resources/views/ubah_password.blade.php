<!DOCTYPE html>
<html>
<head>
    <title>Ubah Password</title>
</head>
<body>
    <h1>Ubah Password</h1>

    @if(session('Error'))
        <p>{{ session('Error') }}</p>
    @endif

    @if(session('Sukses'))
        <p>{{ session('Sukses') }}</p>
    @endif

    <b>Saran Perubahan password :</b>
    <ul>
        <li>Password harus kombinasi Huruf Besar, Huruf Kecil dan Angka</li>
        <li>Panjang Password minimum 8 karakter</li>
        <li>Panjang Password maksimum 16 karakter</li>
        <li>Tidak boleh menggunakan username, nama depan, nama belakang, bulan lahir, nomor atau karakter berurut</li>
        <li>Berupa suatu kata yg mengandung arti, contoh : Lov3soW3ll</li>
    </ul>

    <form method="POST" action="/ubah-password">
        @csrf
        Password Lama: <br>
        <input type="password" name="password_lama" required><br><br>
        Password Baru: <br>
        <input type="password" name="password_baru" required><br><br>
        Konfirmasi Password Baru: <br>
        <input type="password" name="konfirmasi" required><br><br>
        <button type="submit">Ubah Password</button>
    </form>
    <br>
    <a href="/menu">Kembali ke Menu Utama</a>
</body>
</html>
