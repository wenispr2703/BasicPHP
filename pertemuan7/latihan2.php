
<?php 
// Cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"]) ||
    !isset($_GET["NIM"]) ||
    !isset($_GET["Email"]) ||
    !isset($_GET["Jurusan"]) ||
    !isset($_GET["Gambar"])) {
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <li><img src="img/<?= $_GET["Gambar"]; ?>" alt=""></li>
        <li><?= $_GET["Nama"]; ?></li>
        <li><?= $_GET["NIM"]; ?></li>
        <li><?= $_GET["Email"]; ?></li>
        <li><?= $_GET["Jurusan"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar mahsiswa</a>
</body>
</html>