<?php
    require("models/promo.php");
    require("models/menu.php");
    $promo = new promo();
    $menu = new menu();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"])&&!empty($_POST["id_menu"])&&!empty($_POST["start"])&&!empty($_POST["end"])) {
        $n = $_POST["nama"];
        $m = $_POST["id_menu"];
        $s = $_POST["start"];
        $e = $_POST["end"];
        $promo->tambah($n,$m,$s,$e);
        $success = "Promo berhasil ditambahkan";
      }else {
          $error = "Data Promo wajib diisi!";
      }
    }
  
    /* Edit promo */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_promo"])&&!empty($_POST["nama"])&&!empty($_POST["id_menu"])&&!empty($_POST["start"])&&!empty($_POST["end"])) {
        $p = $_POST["id_promo"];
        $n = $_POST["nama"];
        $m = $_POST["id_menu"];
        $s = $_POST["start"];
        $e = $_POST["end"];
          $promo->ubah($p,$n,$m,$s,$e);
          $success = "Data berhasil diedit";
      } 
    }

     /* Edit Foto*/ 
  if (isset($_POST["submit-foto"])) {
    if (!empty($_POST['id_promo'])&&!empty($_FILES['foto'])) {
      $p       = $_POST["id_promo"];
      $f_tmp   = $_FILES['foto']['tmp_name'];
      $f_name  = $_FILES['foto']['name']; 
      $f_exp   = explode('.',$f_name);
      $f_ext   = end($f_exp);
      $n       = $p.".png";
      $dir     = '../assets/images/promo/'.$n;
      if(move_uploaded_file($f_tmp,$dir)){ 
        $promo->foto($p,$n);
        $success="Foto berhasil diupload";
      }else{
        $error="Foto gagal diupload";
      }
    }
  }
  
    /* Hapus Promo*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_promo"])) {
        $i = $_POST["id_promo"];
        $f = $promo->tampil_id($i)["foto"];
        $n = $promo->tampil_id($i)["nama"];
        if (!empty($f)) {
          unlink("../assets/images/promo/$f");
        }
        $promo->hapus($i);
        $success = $n." berhasil dihapus";
      }
    } 
  /* Tampil */
    $data_promo = $promo->tampil();
    $data_menu  = $menu->tampil();
?>
