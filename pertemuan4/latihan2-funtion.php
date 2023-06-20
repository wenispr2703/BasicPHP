<?php 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama! ";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan fundtion</title>
    </head>
    <body>
        <h1><?= salam("Pagi","Weni"); ?></h1>
    </body>

</html>