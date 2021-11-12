<?php
session_start();
require("library/database.php");
require("library/penerbit.php");
$penerbit = new penerbit();
 
if(isset($_POST['tombol_edit']) && isset($_SESSION['kunci'])){
    $kunci = $_SESSION['kunci'];
    $nama_penerbit = $_POST['penerbit'];
    $alamat = $_POST['alamat'];
 
    $edit_penerbit = $penerbit->ubah($kunci, $nama_penerbit, $alamat);
    if($edit_penerbit){
    header('Location: index.php');
    }
}
?>
