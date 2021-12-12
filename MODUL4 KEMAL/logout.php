<?php 
 
session_start();
session_destroy();
 
header("Location: Kemal_Index.php");
 
?>