<?php
require("models/menu.php");
  require("models/varian.php");
    $menu = new menu();
    $varian = new varian();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"])&&!empty($_POST["deskripsi"])&&!empty($_POST["id_varian"])) {
        $n = $_POST["nama"];
        $d = $_POST["deskripsi"];
        $v = $_POST["id_varian"];
        $menu->tambah($n,$d,$v);
        $success = "Menu berhasil ditambahkan";
        }else {
            $error = "Data Menu wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_menu"])&&!empty($_POST["nama"])&&!empty($_POST["deskripsi"])&&!empty($_POST["id_varian"])) {
        $i = $_POST["id_menu"];
        $n = $_POST["nama"];
        $d = $_POST["deskripsi"];
        $v = $_POST["id_varian"];
          $menu->ubah($i,$n,$d,$v);
          $success = "Data berhasil diedit";
      } 
    }

     /* Edit Foto*/ 
  if (isset($_POST["submit-foto"])) {
    if (!empty($_POST['id_menu'])&&!empty($_FILES['foto'])) {
      $i       = $_POST["id_menu"];
      $f_tmp   = $_FILES['foto']['tmp_name'];
      $f_name  = $_FILES['foto']['name']; 
      $f_exp   = explode('.',$f_name);
      $f_ext   = end($f_exp);
      $n       = $i.".png";
      $dir     = 'assets/images/menu/'.$n;
      if(move_uploaded_file($f_tmp,$dir)){ 
        $menu->foto($i,$n);
        $success="Foto berhasil diupload";
      }else{
        $error="Foto gagal diupload";
      }
    }
  }
  
    /* Hapus Menu*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_menu"])) {
        $i = $_POST["id_menu"];
        $menu->hapus($i);
        $success = " Data Menu berhasil dihapus";
      }
    } 
  
    $data_menu = $menu->tampil();
?>
