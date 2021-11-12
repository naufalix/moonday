<?php
session_start();
require("library/database.php");
require("library/penerbit.php");
 
$penerbit = new penerbit();
 
if(isset($_GET['data'])){
    $id_penerbit = $_GET['data'];
    $_SESSION['kunci'] =  $id_penerbit;
    $data_penerbit = $penerbit->tampil_id($id_penerbit);
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Penerbit</title>
</head>
<body>	
    <form method="post"  action="konfirmasieditpenerbit.php">
    <table align="center" width="40%" border="1">
        <tr>
            <td colspan="3">
                <a href="index.php"><input type="button" 
                value="Kembali" /></a>
            </td>
        </tr>
        <tr align="left">
        	<td colspan="3"><b>Form Edit Penerbit</b></td>
        </tr>
    	<tr>
        	<td width="20%">Penerbit</td>
            <td width="5%" align="center">:</td>
            <td width="55%"><input type="text" name="penerbit" value="<?php 
            echo $data_penerbit['penerbit']; ?>"/></td>
        </tr>
        <tr>
        	<td width="20%">Alamat</td>
            <td width="5%" align="center">:</td>
            <td width="55%"><input type="text" name="alamat" value="<?php 
            echo $data_penerbit['alamat']; ?>"/></td>
        </tr>
        <tr align="left">
            <td colspan="3"> </td>
        </tr>
         <tr>
        	<td colspan="3"><input type="submit" name="tombol_edit" 
            value="Simpan" /></td>
        </tr>
       
    </table>
    </form>
</body>
</html>
