<?php 
session_start();
session_destroy();
echo "<script>";
echo 'window.location.href="Index.php";';
echo "</script>";
 ?>