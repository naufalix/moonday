<?php
    require("admin/models/store.php");
    require("admin/models/kota.php");
    $store = new store();
    $kota = new kota();

    $data_store = $store->tampil();
?>
