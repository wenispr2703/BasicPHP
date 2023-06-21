<?php 
// // VARIABLE SCOPE

// 1. Variable Lokal 

// $x = 10; 
// function tampilX(){
//     $x = 20; //akan terpanggil karena didalam fungsi
//     echo $x; // variable x tidak akan bisa dipanggil karena variable yang dibuat dalam fuction hanya berlaku di function tersebut.
// }
// tampilX();
// echo "<br>";
// echo $x; //akan memanggil variable diluar function
?>

<?php 
// 2. Variable Global

// $x = 10;
// function tampilX() {
//     global $x; // Variable global => akan mencari variable diluar function
//     echo $x;
// }
// tampilX();
?>

<?php
// 3. Variable Superglobals => Variabel global mikik PHP
// merupakan Array Associative
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump($_REQUEST);
// var_dump($_SERVER);
// var_dump($_ENV);

// 1. $_GET 
// Adalah metode pengiriman data melalui url dan data tersebut bisa diambil oleh variabel super global $_GET
// $_GET["nama"] = "Weni Sepriani";\
// Untuk menambahkan data di url bisa dengan ?key=value => ?nama=weni
// unutk menambahkan data bisa menggunakan & => ?nama=weni&nim=1235
$mahasiswa = [
    [
        "Nama" => "Weni Sepriani", 
        "NIM" => "2000016134",
        "Email" => "wenisepriani@gmail.com",
        "Jurusan" => "Sistem Informasi",
        "Gambar" => "poto1.png"
    ],
    [
        "Nama" => "Lipousa", 
        "NIM" => "293827454",
        "Email" => "loio@gmail.com",
        "Jurusan" => "Sistem Informasi",
        "Gambar" => "poto2.png"
    ],
    [
        "Nama" => "Jakara", 
        "NIM" => "90234734578",
        "Email" => "jak@gmail.com",
        "Jurusan" => "Sistem Informasi",
        "Gambar" => "poto3.png"
        
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>&NIM=<?= $mhs["NIM"]; ?>&Email=<?= $mhs["Email"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>&Gambar=<?= $mhs["Gambar"]; ?>"><?= $mhs["Nama"]; ?></a>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>