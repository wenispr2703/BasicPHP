
<?php
require 'functions.php';
// cek apakah tombol submit sudah di klik atau belum 
if( isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>

        ";
    } else { "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah data mahasiswa</title>
    </head>
    <body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
            <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
            <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required> 
            </li>
            <li>
            <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>
    </body>
</html>