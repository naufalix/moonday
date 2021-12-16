
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Data Varian</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Data Varian</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title float-left" style="margin:20px;">Daftar Varian</h4>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#tambah" style="margin-bottom:30px;">
                                            <i class="fa fa-plus-circle"></i> Tambah Varian
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th style="min-width: 100px; width: 100%;">Varian</th>
                                                <th style="min-width: 100px;">Jumlah menu</th>
                                                <th style="min-width: 110px;"><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach($data_varian as $row) {
                                                    $id_varian = $row['id_varian'];
                                                    $nv        = $row['varian'];
                                                    $jumlah    = $varian->cek_hapus($id_varian);
                                            ?>
                                            <tr>
                                                <td class="text-center"><?= $no ?></td>
                                                <td><?= $nv ?></td>
                                                <td><?= count($jumlah) ?></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-s btn-info" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id_varian ?>)"><i class="fa fa-pencil"></i></button>
                                                    <p id="<?= $id_varian ?>" class="d-none"><?php echo $nv ?></p>
                                                    <button type="button" class="btn btn-s btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id_varian ?>)"><i class="fa fa-trash"></i></button>
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
                            <h4 class="modal-title">Form tambah varian</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-12 p-0">
                                  <label for="varian">Varian</label>
                                  <input type="text" class="form-control" id="varian" name="varian" placeholder="Varian..." required>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-success" name="submit-tambah" ><i class="fa fa-check"></i><span> Submit</span></button>
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
                            <h4 class="modal-title">Form edit varian</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                                <input type="hidden" class="d-none" id="ei" name="id_varian">
                                <div class="form-group">
                                  <div class="row m-0">
                                    <div class="col-12 p-0">
                                      <label for="varian">Varian</label>
                                      <input type="text" class="form-control" id="en" name="varian" placeholder="Varian..." required>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-success" name="submit-edit"><i class="fa fa-save"></i><span> Save</span></button>
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
                            <h4 class="modal-title">Hapus varian</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                              <div class="form-group">
                                <p id="ht">Apakah anda yakin ingin menghapus varian ini?</p>
                                <input type="hidden" class="d-none" class="form-control" id="hi" name="id_varian" value="" required>
                              </div>
                              <div class="modal-footer p-0 pt-3">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger btn-shadow" name="submit-hapus"><i class="fa fa-times"></i><span> Hapus</span></button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
              function edit(id){
                var data = (document.getElementById(id).textContent).split("|");
                document.getElementById("ei").value = id;
                document.getElementById("en").value = data[0];
                for (var i = 0; i < document.getElementsByClassName("el").length ; i++) {
                  if (document.getElementsByClassName("el")[i].value==data[1]) {
                    document.getElementsByClassName("el")[i].selected = "true";
                  }
                }
              }
              function hapus(id){
                var data = (document.getElementById(id).textContent).split("|");
                document.getElementById("hi").value = id;
                document.getElementById("ht").textContent = 'Apakah anda yakin ingin menghapus varian "'+data[0]+'"?';
              }
            </script>
