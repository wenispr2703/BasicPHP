<?php 
// $mahasiswa = [
//     ["Weni Sepriani","1222143", "sernisepriani@gmail.com","Sistem Informasi"],
//     ["Annisa", "891245", "annisa13@gmail.com", "biologi"],
// ]


// Array Associative => key-nya adalah string
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
// echo $mahasiswa[1]["Tugas"][1];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["Gambar"]?>" alt=""></li>
            <li>Nama : <?= $mhs["Nama"]; ?></li>
            <li>NIM : <?= $mhs["NIM"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>