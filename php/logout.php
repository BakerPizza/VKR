<?php
require_once('connection.php');
session_start();
$_SESSION['users']['id_role'] = "0";
$_SESSION['id_user'] = "0";
//echo $_SESSION['id_user'];
//echo $_SESSION['users']['id_role'];
header('Location: ../index.php');


?>