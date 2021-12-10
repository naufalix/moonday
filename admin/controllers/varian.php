<?php
	require("models/varian.php");
  $varian = new varian();
  
  /* Tambah */ 
  if (isset($_POST["submit-tambah"])) {
    if (!empty($_POST["varian"])) {
        $v = $_POST["varian"];
          $varian->tambah($v);
          $success = "Varian berhasil ditambahkan";
      }else {$error = "Data Varian wajib diisi!";}
  }

  /* Edit */
  if (isset($_POST["submit-edit"])) {
    if (!empty($_POST["id_varian"])&&!empty($_POST["varian"])) {
      $i = $_POST["id_varian"];
      $v = $_POST["varian"];
        $varian->ubah($i,$v);
        $success = "Data berhasil diedit";
    } 
  }

  /* Hapus Varian*/ 
  if (isset($_POST["submit-hapus"])) {
    if (!empty($_POST["id_varian"])) {
      $i = $_POST["id_varian"];
      $cek = $varian->cek_hapus($i);
      if (!$cek) {
        $varian->hapus($i);
        $success = " Data Varian berhasil dihapus";
      } else {$error = "Varian sedang digunakan oleh ".count($cek)." menu";}
    }
  } 

  $data_varian = $varian->tampil();
?>
