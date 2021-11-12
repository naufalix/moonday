<?php
require("library/database.php");
require("library/penerbit.php");
$penerbit = new penerbit();
if(isset($_POST['tombol_tambah'])){
    $nama_penerbit = $_POST['penerbit'];
    $alamat = $_POST['alamat'];
 
    $tambah_penerbit = $penerbit->tambah($nama_penerbit, $alamat);
    if($tambah_penerbit){
    header('Location: index.php');
    }
}
?>
