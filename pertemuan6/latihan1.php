<!-- <?php 
$bulan =["Januari", "Februari", "Maret"];
$arr = [100, "text", true];

// Menampilan array versi debugging
var_dump($bulan);
echo "<br>";
print_r($bulan);

// Menampilkan 1 elemen pada Array
echo "<br>";
echo $arr[2];
?> -->

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Array</title>
    </head>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: aquamarine;
            text-align: center;
            line-height: 30px;
            margin: 30px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(180deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
    <body>
<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach($angka as $a):?>
    <?php foreach($a as $b): ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
    </body>
</html>