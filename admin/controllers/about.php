<?php
    require("models/about.php");
    $about = new about();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["judul"])&&!empty($_POST["deskripsi"])) {
        $j = $_POST["judul"];
        $d = $_POST["deskripsi"];
        $about->tambah($j,$d);
        $success = "About berhasil ditambahkan";
        }else {
            $error = "Data About wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_about"])&&!empty($_POST["judul"])&&!empty($_POST["deskripsi"])) {
        $i = $_POST["id_about"];
        $j = $_POST["judul"];
        $d = $_POST["deskripsi"];
          $about->ubah($i,$j,$d);
          $success = "Data berhasil diedit";
      } 
    }

     /* Edit Foto*/ 
  if (isset($_POST["submit-foto"])) {
    if (!empty($_POST['id_about'])&&!empty($_FILES['foto'])) {
      $i       = $_POST["id_about"];
      $f_tmp   = $_FILES['foto']['tmp_name'];
      $f_name  = $_FILES['foto']['name']; 
      $f_exp   = explode('.',$f_name);
      $f_ext   = end($f_exp);
      $n       = $i.".png";
      $dir     = '../admin/assets/images/about/'.$n;
      if(move_uploaded_file($f_tmp,$dir)){ 
        $about->foto($i,$n);
        $success="Foto berhasil diupload";
      }else{
        $error="Foto gagal diupload";
      }
    }
  }
  
    /* Hapus About*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_about"])) {
        $i = $_POST["id_about"];
        $f = $about->tampil_id($i)["foto"];
        $n = $about->tampil_id($i)["judul"];
        if (!empty($f)) {
          unlink("../admin/assets/images/about/$f");
        }
        $about->hapus($i);
        $success = $n." berhasil dihapus";
      }
    } 
  
    $data_about = $about->tampil();
?>
