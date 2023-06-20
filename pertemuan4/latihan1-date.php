<?php 
// Date => Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time 
// UNIX Timestamp => detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("d M Y", time()+60*60*24*365);

// mktime
// membuat sendiri detik (0,0,0,0,0,0) => (jam, menit, detik, bulan, tanggal, tahun)
// echo date("l", mktime(0,0,0,27,3,2002))

// strtotime
// echo date("l", strtotime("27 march 2002"))
?>