<?php
$namahos = "localhost";
$pengguna_mysql = "root";
$katalaluan_mysql = "Fsyura04_";
$pdata_mysql = "PochinKiHotelSystem";

$connection = mysqli_connect ($namahos, $pengguna_mysql, $katalaluan_mysql) or die ("Sorry, Database not connected");

mysqli_select_db ($connection, $pdata_mysql) or die ("No database chosen");
?>
