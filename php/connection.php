<?php
$connect = mysqli_connect("localhost", "root","", "bd_name") or die ("error_connect_to_database(ERROR 404)". mysqli_error($conn));
$connect->set_charset("utf8");
?>
