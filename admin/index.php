<?php  
  session_start(); 
  require('config/database.php'); 
  // $conn = mysqli_connect("localhost","root","","madfest"); 
  //   //cek koneksi 
  //   if (!$conn){ 
  //     die("Error koneksi: " . mysqli_connect_errno()); 
  //   } 
  date_default_timezone_set("Asia/Jakarta"); 
  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    if  ($page=="logout") {header("Location:logout.php");}
    $admin_page = array(
      "detailmenu","detailpromo","detailstore","detailuser",
      "editkote","editmenu","editprofil","editpromo","editstore","edituser","editvarian",
      "kota","menu","profil","promo","store",
      "tambahkota","tambahmenu","tambahpromo","tambahstore","tambahuser","tambahvarian",
      "ubahpassword","user","varian","login"
    );
    if  (in_array($page, $admin_page)) { $page=$page; }
    else { $page="404"; }
  }
  else{ $page="profil"; } 
  
  if ($page!="login") {require('config/session.php');}
  include("config/controller.php"); 
  include("config/views.php"); 
  //mysqli_close($conn);
?> 