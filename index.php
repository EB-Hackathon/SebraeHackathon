<?php
session_start();
$_SESSION["inicio"] = "sim";
$_SESSION["gravou"] = "nao";
header ("Location:sbh.php");
?>

