<?php
// Pengkondisian /Percabangan
// if else
// if else if else
// ternary
//  switch

// 1. if
// $x = 20;
// if ( $x < 20 ) {
//     echo "BENAR";
// } else if ($x == 20){
//     echo "bingo!";
// }
// else {
//     echo "salah";
// }
// ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
        <style>
            .warnabaris{
                background-color: aqua;
            }
        </style>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php for ($i = 1; $i <= 5; $i++ ) : ?>
                <?php if ( $i % 2 == 1 ) : ?>
                    <tr class="warnabaris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for( $j = 1; $j <= 5; $j++): ?>
                        <td><?= "$i, $j"; ?></td>
                    <?php endfor;?>
                </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>