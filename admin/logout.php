<?php 
session_start();  
session_unset();
setcookie("id","", time() + 3600, "/");
header("Location:index.php?page=login"); 
?> 