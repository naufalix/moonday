<?php 
require("library/database.php");
require("library/penerbit.php");
 
$penerbit = new penerbit();

if(isset($_POST['tombol_tambah'])){
  $nama_penerbit = $_POST['penerbit'];
  $alamat = $_POST['alamat'];
  $tambah_penerbit = $penerbit->tambah($nama_penerbit, $alamat);
  if($tambah_penerbit){
    $success = "Penerbit berhasil ditambahkan";
  }else{$error = "Penerbit gagal ditambahkan";}
}

if(isset($_POST['tombol_edit'])){
  $id_penerbit = $_POST['id_penerbit'];
  $nama_penerbit = $_POST['penerbit'];
  $alamat = $_POST['alamat'];
  $edit_penerbit = $penerbit->ubah($id_penerbit, $nama_penerbit, $alamat);
  if($edit_penerbit){
    $success = "Penerbit berhasil diedit";
  }else{$error = "Penerbit gagal diedit";}
}

if(isset($_POST['tombol_hapus'])){
	$id_penerbit = $_POST['id_penerbit'];
	$hapus_penerbit = $penerbit->hapus($id_penerbit);
  if($hapus_penerbit){
    $success = "Penerbit berhasil dihapus";
  }else{$error = "Penerbit gagal dihapus";}
}

$data_penerbit = $penerbit->tampil();

?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Penerbit</title>
    <link rel="stylesheet" href="w3.css">
    <style type="text/css">
      .w3-modal-content {width:400px;}
    </style>
    <script src="sweetalert.min.js"></script>
</head>
<body>
    <script>
      <?php 
        if (isset($success)){ echo "swal('Berhasil', '$success', 'success');"; } 
        if (isset($error))  { echo "swal('Error!', '$error', 'error');"; } 
      ?>
    </script>
    <table border="1">
        <tr>
            <td colspan="5">
                <input type="button" value="Tambah Penerbit" onclick="showModal('modaltambah')"/>
            </td>
        </tr>
        <tr>
            <td width="10%">No</td>
            <td width="30%">Penerbit</td>
            <td width="40%">Alamat</td>
            <td width="20%">Action</td>
        </tr>
        <?php 
            $no=1;
            foreach($data_penerbit as $row) {
                $id_penerbit= $row['id_penerbit'];
                $penerbit   = $row['penerbit'];
                $alamat     = $row['alamat'];
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $penerbit ?></td>
            <td><?= $alamat ?></td>
            <td style="display: flex;">
            	<input type="button" value="Edit Penerbit" onclick="showModal('modaledit'),edit(<?= $id_penerbit ?>)"/>
                <div style="width: 15px;"></div>
                <p id="<?= $id_penerbit ?>" style="display: none"><?= $penerbit."|".$alamat ?></p>
                <input type="button" value="Hapus Penerbit" onclick="showModal('modalhapus'),hapus(<?= $id_penerbit ?>)"/>
            </td>
        </tr>
        <?php $no++;}?>
 
    </table>
    <!-- The Modal -->
    <div id="modaltambah" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="hideModal('modaltambah')"class="w3-button w3-display-topright">&times;</span>
          <p>Tambah Penerbit</p>
          <hr>
          <form method="post">
            <table align="center" width="40%" border="1">
                <tr>
                    <td width="20%">Penerbit</td>
                    <td width="5%" align ="center">:</td>
                    <td width="55%"><input type="text" name="penerbit" value=""/></td>
                </tr>
                <tr>
                    <td width="20%">Alamat</td>
                    <td width="5%" align ="center">:</td>
                    <td width="55%"><input type="text" name="alamat" value=""/></td>
                </tr>
            </table>
            <hr>
            <div style="display: flex">
              <input type="submit" name="tombol_tambah" value="Tambah" style="margin-left: auto"/>
            </div>
          </form><br>
        </div>
      </div>
    </div> 
    <div id="modaledit" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="hideModal('modaledit')"class="w3-button w3-display-topright">&times;</span>
          <p>Edit Penerbit</p>
          <hr>
          <form method="post">
            <table align="center" width="40%" border="1">
              <input type="hidden" id="ei" name="id_penerbit">
              <tr>
                <td width="20%">Penerbit</td>
                <td width="5%" align ="center">:</td>
                <td width="55%"><input type="text" id="ep" name="penerbit" value=""/></td>
              </tr>
              <tr>
                <td width="20%">Alamat</td>
                <td width="5%" align ="center">:</td>
                <td width="55%"><input type="text" id="ea" name="alamat" value=""/></td>
              </tr>
            </table>
            <hr>
            <div style="display: flex">
              <input type="submit" name="tombol_edit" value="Simpan" style="margin-left: auto"/>
            </div>
          </form><br>
        </div>
      </div>
    </div> 
    <div id="modalhapus" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="hideModal('modalhapus')"class="w3-button w3-display-topright">&times;</span>
          <p>Hapus Penerbit</p>
          <hr>
          <form method="post">
            <input type="hidden" id="hi" name="id_penerbit">
            <p id="ht">Some text in the Modal..</p>
            <hr>
            <div style="display: flex">
              <input type="submit" name="tombol_hapus" value="Hapus" style="margin-left: auto"/>
            </div>
          </form><br>
        </div>
      </div>
    </div> 
    <script type="text/javascript">
      function showModal(modalname){document.getElementById(modalname).style.display='block';}
      function hideModal(modalname){document.getElementById(modalname).style.display='none';}
      function edit(id){
        var data = (document.getElementById(id).textContent).split("|");
        document.getElementById("ei").value = id;
        document.getElementById("ep").value = data[0];
        document.getElementById("ea").value = data[1];
      }
      function hapus(id){
        var data = (document.getElementById(id).textContent).split("|");
        document.getElementById("hi").value = id;
        document.getElementById("ht").textContent = 'Apakah anda yakin ingin menghapus "'+data[0]+'"?';
      }
    </script>
</body>
 
</html>
