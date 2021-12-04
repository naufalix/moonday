<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Data Store</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Store</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title float-left" style="margin:20px;">Daftar Store</h4>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-info float-right" data-toggle="modal" data-target="#tambah"
                                style="margin-bottom:30px;">
                                <i class="fa fa-plus-circle"></i> Tambah Store
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th style="min-width:200px;">Nama</th>
                                    <th>Kota</th>
                                    <th style="min-width:200px; width: 100%;">Alamat</th>
                                    <th>Lokasi</th>
                                    <th style="min-width: 110px;">
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                    foreach($data_store as $row) {
                                        $id_store   = $row['id_store'];
                                        $nama       = $row['nama'];
                                        $alamat     = $row['alamat'];
                                        $id_kota    = $row['id_kota'];
                                        $nk         = $kota->tampil_id($id_kota)["kota"];
                                        $lokasi     = $row['lokasi'];
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td><?= $nama ?></td>
                                    <td><?= $nk ?></td>
                                    <td><?= $alamat ?></td>
                                    <td><a href="<?= $lokasi ?>" target="_blank"><?= $lokasi ?></a></td>
                                    <td align="center">
                                        <button type="button" class="btn btn-s btn-info" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id_store ?>)"><i class="fa fa-pencil"></i></button>
                                        <p id="<?= $id_store ?>" class="d-none"><?php echo $nama.'|'.$alamat.'|'.$id_kota.'|'.$lokasi ?></p>
                                        <button type="button" class="btn btn-s btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id_store ?>)"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form tambah Store</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <div class="form-group">
                        <div class="row m-0">
                            <div class="col-7 p-0 pr-2">
                                <label for="nama">Nama Store</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama..." required>
                            </div>
                            <div class="col-5 p-0">
                                <label for="kota">Kota</label>
                                <select class="form-control" id="id_kota" name="id_kota">
                                    <?php 
                                        foreach($data_kota as $row) {
                                            $ik = $row['id_kota'];
                                            $nk = $row['kota'];
                                    ?>
                                    <option value="<?= $ik ?>"><?= $nk ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 p-0">
                            <Label for="lokasi">Lokasi</Label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 p-0">
                            <Label for="alamat">Alamat</Label>
                            <textarea type="text" class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit-tambah">
                            <i class="fa fa-check"></i><span> Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="edit" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Edit Store</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <input type="hidden" class="d-none" id="ei" name="id_store">
                    <div class="form-group">
                        <div class="row m-0">
                            <div class="col-7 p-0 pr-2">
                                <label for="nama">Nama Store</label>
                                <input type="text" class="form-control" id="en" name="nama" placeholder="Nama..." required>
                            </div>
                            <div class="col-5 p-0">
                                <label for="kota">Kota</label>
                                <select class="form-control" id="id_kota" name="id_kota">
                                    <?php 
                                        foreach($data_kota as $row) {
                                            $ik = $row['id_kota'];
                                            $nk = $row['kota'];
                                    ?>
                                    <option class="ev" value="<?= $ik ?>"><?= $nk ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 p-0">
                            <Label for="lokasi">Lokasi</Label>
                            <input type="text" class="form-control" id="el" name="lokasi" placeholder="Lokasi..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 p-0">
                            <Label for="alamat">Alamat</Label>
                            <textarea type="text" class="form-control" rows="3" id="ea" name="alamat" placeholder="Alamat..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit-edit"><i class="fa fa-check"></i><span> Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="hapus" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Store</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <div class="form-group">
                        <p id="dsc">Apakah anda yakin ingin menghapus store ini?</p>
                        <input type="hidden" class="d-none" class="form-control" id="ds" name="id_store" value=""
                            required>
                    </div>
                    <div class="modal-footer p-0 pt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-shadow" name="submit-hapus"><i
                                class="fa fa-times"></i><span> Hapus</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function edit(id) {
    var data = (document.getElementById(id).textContent).split("|");
    document.getElementById("ei").value = id;
    document.getElementById("en").value = data[0];
    document.getElementById("ea").value = data[1];
    document.getElementById("el").value = data[3];
    for (var i = 0; i < document.getElementsByClassName("ev").length; i++) {
        if (document.getElementsByClassName("ev")[i].value == data[2]) {
            document.getElementsByClassName("ev")[i].selected = "true";
        }
    }
}

function hapus(id) {
    var data = (document.getElementById(id).textContent).split("|");
    document.getElementById("ds").value = id;
    document.getElementById("dsc").textContent = 'Apakah anda yakin ingin menghapus store "' + data[0] + '"?';
}
</script>
