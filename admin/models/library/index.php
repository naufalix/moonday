<?php 
require("library/database.php");
require("library/penerbit.php");
 
$penerbit = new penerbit();
//var_dump($penerbit);
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_penerbit = $_GET['data'];
		$penerbit->hapus($id_penerbit);
	}
}
$data_penerbit = $penerbit->tampil();
 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_penerbit = $_GET['data'];
		$penerbit->hapus($id_penerbit);
	}
}

?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Penerbit</title>
</head>
<body>
    <table border="1">
        <tr>
            <td colspan="5">
                <a href="tambahpenerbit.php"><input type="button" value="Tambah Penerbit" /></a>
            </td>
        </tr>
        <tr>
            <td width="10%">No</td>
            <td width="30%">Penerbit</td>
            <td width="40%">Alamat</td>
            <td width="10%">Edit</td>
            <td width="10%">Hapus</td>
        </tr>
        <?php 
        $no=1;
        foreach($data_penerbit as $row) {?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['penerbit'];?></td>
            <td><?php echo $row['alamat'];?></td>
            <td>
            	<a href="editpenerbit.php?data=<?php echo $row['id_penerbit'];?>">
            	<input type="button" value="Edit Penerbit" />
            </td>
            <td>
            	<a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $row['penerbit']; ?>?'))
            		window.location.href = 'index.php?aksi=hapus&data=<?php echo $row['id_penerbit'];?>'">
                <input type="button" value="Hapus Penerbit" />
            </td>
        </tr>
        <?php $no++;}?>
 
    </table>
</body>
 
</html>
