<?php
$mahasiswa = [
    ["Weni Sepriani", "2000016134", "Sistem Informasi", "seprianiweni@gmail.com"],
    ["Wenii", "2000016134", "Sistem Informasi", "seprianiweni@gmail.com"]
]
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
        <?php endforeach;?>
    </body>
</html>