<?php
	/* Edit */
  if (isset($_POST["submit-profil"])) {
    if (!empty($_POST["nama"])&&!empty($_POST["username"])) {
      $i = $_SESSION['id'];
      $n = $_POST["nama"];
      $u = $_POST["username"];
      $l = $user->tampil_id($i)["level"];
      $ul = $user->tampil_id($i)["username"];
      if ($u==$ul) {
        $user->ubah($i,$n,$u,$l);
        $success = "Profil berhasil diedit";
      }
      if ($u!=$ul) {
        if (!($user->cek_username($u))) {
          $user->ubah($i,$n,$u,$l);
	        $success = "Profil berhasil di edit";
        } else {$error = "Username ".$u." telah terpakai";}
      }
    } else {$error = "Nama & username tidak boleh kosong";}
  }

  /* Edit Foto*/ 
  if (isset($_POST["submit-foto"])) {
    if (!empty($_FILES['foto'])) {
      $i       = $_SESSION['id'];
      $f_tmp   = $_FILES['foto']['tmp_name'];
      $f_name  = $_FILES['foto']['name']; 
      $f_exp   = explode('.',$f_name);
      $f_ext   = end($f_exp);
      $n       = $i.".png";
      $dir     = 'assets/images/users/'.$n;
      if(move_uploaded_file($f_tmp,$dir)){ 
        $user->foto($i,$n);
        $success="Foto berhasil diedit";
      }else{
        $error="Foto gagal diupload";
      }
    }
  }

	$profil = $user->tampil_id($_SESSION['id']);
?>