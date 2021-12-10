<?php
    require("models/kota.php");
    $kota = new kota();
    
    /* Tambah Data */
    if (isset($_POST["submit-tambah"])) {
        if (!empty($_POST["kota"])) {
        $dataKota = $_POST["kota"];
        $kota->tambah($dataKota);
        $success = "kota berhasil ditambahkan";
        }else {$error = "Data kota wajib diisi!";}
    }

    /* Edit Data */
    if (isset($_POST["submit-edit"])) {
        if (!empty($_POST["id_kota"])&&!empty($_POST["kota"])) {
        $idKota = $_POST["id_kota"];
        $dataKota = $_POST["kota"];
        $kota->edit($dataKota, $idKota);
        $success = "Data berhasil diedit";
        }
    }

    /* Hapus Data*/
    if (isset($_POST["submit-hapus"])) {
        if (!empty($_POST["id_kota"])) {
            $idKota = $_POST["id_kota"];
            $cek = $kota->cek_hapus($idKota);
            if (!$cek) {
                $kota->hapus($idKota);
                $success = "Data kota berhasil dihapus";
            } else { $error = "Kota sedang digunakan oleh ".count($cek)." store"; }
        }
    }
    
    /* Tampil Data */
    $dataKota = $kota->tampil();
?>
