<?php 
  if (isset($_POST["login"],$_POST["username"],$_POST["password"])) {
    $u = $_POST["username"];
    $p = MD5($_POST["password"]);

    //cek username dan password 
    require("models/user.php");
    $user = new user();
    $data = $user->login($u,$p);
    if ($data) {
        $id = $data["id_user"];
        $level = $data["level"];
        $_SESSION['id'] = $id;
        $_SESSION['level'] = $level;
        //setcookie("id", $id, time() + (86400 * 30), "/"); 
        header("Location:dashboard"); 
        //echo $id."<br>".$role;
    } else {$error="Username/password salah";}
  }
?>