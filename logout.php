<?php
session_start();
unset($_SESSION["uid"]);

header("location:login1.php");
//print_r($GLOBALS);
?>