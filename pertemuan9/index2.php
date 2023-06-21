<?php 
// Koneksi ke database
// data datanya => Nama host database, Username, Password, Nama database
    $conn = mysqli_connect("localhost","root", "", "phpdasar");

// ambil data dari tabel mahasiswa
// koneksi => koneksi database, query,
// if( !$result ) {
//     echo mysqli_error($conn);
// } untuk melihat error pada nama database
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) dari mahasiswa dari object result

// 1. mysqli_fetch_row() => mengembalikan array numeric
// $mhs = mysqli_fetch_row($result);
// var_dump(($mhs));

// 3. mysqli_fetch_array() => mengembalikan keduanya
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs[3])

// 4. mysqli_fetch_object()
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// 2. mysqli_fetch_assoc() => mengembalikan array assos

// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs["nama"]);
// }



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row=mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    </body>
</html>