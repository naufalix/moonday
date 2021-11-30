
<?php
  // if (!empty($_COOKIE["id"])&&!empty($_COOKIE["level"])) { 
  //   $id   = $_COOKIE["id"];
  //   $level = $_COOKIE["level"];
  // }
  // else 
  if (isset($_SESSION['id'])&&isset($_SESSION['level'])) {
    $id   = $_SESSION['id'];
    $level = $_SESSION['level'];
  }

  if (isset($id,$level)) {
    require("models/user.php");
    $user = new user();
    $data = $user->tampil_id($id);
    //foreach($data_user as $data){ 
      $username = $data["username"]; 
      $nama     = $data["nama"];
      $foto     = $data["foto"];
    //}
    if (empty($foto)) {$foto="default.png";}
  }
  else {header("Location:login");}
?>