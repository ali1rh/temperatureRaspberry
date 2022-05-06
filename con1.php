<?php
$host = "localhost";
$user = "rezajaxc_zahra";
$pass = "oMnRX.9#+w{&";
$db = "rezajaxc_zahra";

$con = @mysqli_connect($host, $user, $pass, $db) or die ('Failed to connect to database');
mysqli_set_charset($con,"utf8");

if (!@$con){ //||!@$selected
die('error connect to db');
}

?>