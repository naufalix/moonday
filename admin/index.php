<?php  
  session_start(); 
  require('../config/database.php'); 
  date_default_timezone_set("Asia/Jakarta"); 
  
  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    if  ($page=="logout") {header("Location:logout.php");}
    $admin_page = array(
      "about","dashboard","kota","login","menu","profil","promo","store","ubahpassword","user","varian"
    );
    if  (in_array($page, $admin_page)) { $page=$page; }
    else { $page="404"; }
  }
  else{ $page="dashboard"; } 
  
  if ($page!="login") {require('../config/session.php');}
  include("../config/controller.php"); 
  include("../config/views.php"); 
  //mysqli_close($conn);
?> 