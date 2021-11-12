<?php 
  session_start();
  require('config/database.php'); 
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
        header("Location:index.php?page=profil"); 
        //echo $id."<br>".$role;
    } else {header("Location:login.php?gagal=1");}
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("views/includes/head.php")?>
</head>

<body class="skin-default-dark fixed-layout" style="background-color:floralwhite">
    <?php include("views/includes/preloader.php")?>
    <div id="main-wrapper" style="background-color:floralwhite"> 
        <div class="page-wrapper" style="background-color:floralwhite">
            <div class="container-fluid">
                <!-- Row -->
                <div class="row" style="width:800px;margin:auto;">
                    <div class="col-lg-8 col-xlg-9 col-md-7" style="margin:auto;">
                        <div class="card" style="background-color:floralwhite;border-radius:10px">
                            <!-- Tab panes -->
                            <div class="card-body" style="border:2px solid lightseagreen;border-radius:10px">
                                <img src="assets/images/logo.png" alt="homepage" class="dark-logo" style="display:block;margin:auto;height:45px"/>
                                <h6 class="card-subtitle text-center" style="color:dimgray">
                                    sign in to start your session</h6>
                                <br>
                                <h6 class="card-subtitle text-danger">*Maaf username tidak boleh kosong</h6>

                                <!-- form (action masih ke profil)-->
                                <form action="" method="post" class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Username</b></label>
                                        <div class="col-md-12" style="background-color:burlywood">
                                            <input type="text" placeholder="enter username" name="username"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Password</b></label>
                                        <div class="col-md-12" style="background-color:burlywood">
                                            <input type="password" placeholder="enter password" name="password"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success float-right"
                                            type="submit" name="login" value="login">Sign in</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("views/includes/script.php") ?>
</body>

</html>