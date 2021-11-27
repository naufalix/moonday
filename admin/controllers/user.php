<?php
	//require("models/user.php");
  if ($level=="admin") {
    //header("Location: index.php?page=404");
    $page="404";
  }
  $user = new user();
  
  /* Tambah */ 
  if (isset($_POST["submit-tambah"])) {
    if (!empty($_POST["nama"])&&!empty($_POST["username"])&&!empty($_POST["password"])&&!empty($_POST["level"])) {
      $n = $_POST["nama"];
      $u = $_POST["username"];
      $p = MD5($_POST["password"]);
      $l = $_POST["level"];
      if (!($user->cek_username($u))) {
        $user->tambah($n,$u,$p,$l);
        $success = "Akun berhasil ditambahkan";
      } else {$error = "Username telah terpakai";}
    }else {$error = "Semua data wajib diisi!";}
  }

  /* Edit */
  if (isset($_POST["submit-edit"])) {
    if (!empty($_POST["id_user"])&&!empty($_POST["nama"])&&!empty($_POST["username"])&&!empty($_POST["level"])) {
      $i = $_POST["id_user"];
      $n = $_POST["nama"];
      $u = $_POST["username"];
      $l = $_POST["level"];
      $ul = $user->tampil_id($i)["username"];
      if ($u==$ul) {
        $user->ubah($i,$n,$u,$l);
        if (!empty($_POST["p"])) {
          $p = MD5($_POST["p"]);
          $user->password($i,$p);
        }
        $success = "Akun berhasil diedit";
      }
      if ($u!=$ul) {
        if (!($user->cek_username($u))) {
          $user->ubah($i,$n,$u,$l);
	        if (!empty($_POST["p"])) {
	          $p = MD5($_POST["p"]);
	          $user->password($i,$p);
	        }
          $success = "Akun berhasil di edit";
        } else {$error = "Username ".$u." telah terpakai";}
      }
    } 
  }

  /* Edit Foto*/ 
  if (isset($_POST["submit-foto"])) {
    if (!empty($_POST['id_user'])&&!empty($_FILES['foto'])) {
      $i       = $_POST["id_user"];
      $f_tmp   = $_FILES['foto']['tmp_name'];
      $f_name  = $_FILES['foto']['name']; 
      $f_exp   = explode('.',$f_name);
      $f_ext   = end($f_exp);
      $n       = $i.".png";
      $dir     = 'assets/images/users/'.$n;
      if(move_uploaded_file($f_tmp,$dir)){ 
        $user->foto($i,$n);
        $success="Foto berhasil diupload";
      }else{
        $error="Foto gagal diupload";
      }
    }
  }

  /* Hapus User*/ 
  if (isset($_POST["submit-hapus"])) {
    if (!empty($_POST["id_user"])) {
      $i = $_POST["id_user"];
      //get foto
      $f = $user->tampil_id($i)["foto"];
      $n = $user->tampil_id($i)["nama"];
      unlink("assets/images/users/$f");
      $user->hapus($i);
      $success = $n." berhasil dihapus";
    }
  } 

  $data_user = $user->tampil();
?>