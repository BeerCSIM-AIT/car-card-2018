<?php
    $host = "localhost";
    $user = "root";
    $password = "12345678";
    $objConnect = mysqli_connect($host, $user, $password) or die("ติดต่อ Host ไม่ได้");
    $db_name = "car_card_regis_2018";
    mysqli_select_db($objConnect, $db_name) or die("ติดต่อฐานข้อมูลไม่ได้");
    mysqli_set_charset($objConnect, "utf8");
?>
