<?php
    require("models/store.php");
    require("models/kota.php");
    $store = new store();
    $kota = new kota();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"]) && !empty($_POST["alamat"]) && !empty($_POST["id_kota"]) && !empty($_POST["lokasi"])) {
        $n = $_POST["nama"];
        $a = $_POST["alamat"];
        $k = $_POST["id_kota"];
        $l = $_POST["lokasi"];
        $store->tambah($n,$a,$k,$l);
        $success = "Store berhasil ditambahkan";
        }else {
            $error = "Data Store wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_store"]) && !empty($_POST["nama"]) && !empty($_POST["alamat"]) && !empty($_POST["id_kota"]) && !empty($_POST["lokasi"])) {
        $i = $_POST["id_store"];
        $n = $_POST["nama"];
        $a = $_POST["alamat"];
        $k = $_POST["id_kota"];
        $l = $_POST["lokasi"];
          $store->ubah($i,$n,$a,$k,$l);
          $success = "Data berhasil diedit";
      } 
    }
  
    /* Hapus Store*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_store"])) {
        $i = $_POST["id_store"];
        $store->hapus($i);
        $success = " Data Store berhasil dihapus";
      }
    } 
  
    $data_store = $store->tampil();
    $data_kota = $kota->tampil();
?>
