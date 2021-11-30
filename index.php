<?php  
  require('config/database.php'); 
  date_default_timezone_set("Asia/Jakarta"); 
  
  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    if  ($page=="logout") {header("Location:logout.php");}
    $user_page = array(
      "about","home","menu","promo","store"
    );
    if  (in_array($page, $user_page)) { $page=$page; }
    else { $page="404"; }
  }
  else{ $page="home"; } 
  
  include("config/controller.php"); 
  include("config/views-user.php"); 
?> 