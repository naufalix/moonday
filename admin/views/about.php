            
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Data About</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Data About</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title float-left" style="margin:20px;">Daftar About</h4>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#tambah" style="margin-bottom:30px;">
                                            <i class="fa fa-plus-circle"></i> Tambah About
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th style="min-width: 200px;">Judul</th>
                                                <th style="width: 100%;">Deskripsi</th>
                                                <th style="min-width: 110px;"><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach($data_about as $row) {
                                                    $id_about   = $row['id_about'];
                                                    $judul      = $row['judul'];
                                                    $deskripsi  = $row['deskripsi'];
                                                    $foto       = $row['foto'];
                                                    if (empty($foto)) {$foto="default.png";}
                                            ?>
                                            <tr>
                                                <td class="text-center"><?= $no ?></td>
                                                <td>
                                                    <img src="../assets/images/about/<?= $foto ?>" height="30" width="30" class="mr-2" style="object-fit: cover">
                                                    <?= $judul ?>
                                                <td><?= $deskripsi ?></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-s btn-info" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id_about ?>)"><i class="fa fa-pencil"></i></button>
                                                    <p id="<?= $id_about ?>" class="d-none"><?php echo $judul.'|'.$deskripsi?></p>
                                                    <button type="button" class="btn btn-s btn-info" title="Edit foto" data-toggle="modal" data-target="#foto" onclick="foto(<?= $id_about ?>)"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-s btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id_about ?>)"><i class="fa fa-trash"></i></button>
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
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Form tambah About</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-12 p-0">
                                  <label for="judul">Judul</label>
                                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul..." required>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-12 p-0">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" rows="5" name="deskripsi" placeholder="Deskripsi..." required></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-success" name="submit-tambah"><i class="fa fa-check"></i><span> Submit</span></button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="edit" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Form Edit About</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                        <form class="forms-sample" method="post">
                        <input type="hidden" class="d-none" id="ei" name="id_about">
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-12 p-0">
                                  <label for="judul">Judul</label>
                                  <input type="text" class="form-control" id="en" name="judul" placeholder="Judul..." required>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-12 p-0">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" rows="5" id="ed" name="deskripsi" placeholder="Deskripsi..." required></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-success" name="submit-edit" ><i class="fa fa-check"></i><span> Submit</span></button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="foto" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="fd">Form edit foto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <input type="hidden" class="d-none" id="fi" name="id_about" required>
                                <p for="foto">Upload foto :</p>
                                <input type="file" class="form-control" name="foto" required style="height: auto">
                              </div>
                              <div class="modal-footer p-0 pt-3">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success btn-shadow" name="submit-foto"><i class="fa fa-save"></i><span> Simpan</span></button>
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
                            <h4 class="modal-title">Hapus Menu</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                              <div class="form-group">
                                <p id="ht">Apakah anda yakin ingin menghapus about ini?</p>
                                <input type="hidden" class="d-none" class="form-control" id="hi" name="id_about" value="" required>
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
                document.getElementById("ed").value = data[1];
                for (var i = 0; i < document.getElementsByClassName("ev").length ; i++) {
                  if (document.getElementsByClassName("ev")[i].value==data[2]) {
                    document.getElementsByClassName("ev")[i].selected = "true";
                  }
                }
              }
              function foto(id){
                var data = (document.getElementById(id).textContent).split("|");
                document.getElementById("fi").value = id;
                document.getElementById("fd").textContent = 'Edit foto '+data[0];
              }
              function hapus(id){
                var data = (document.getElementById(id).textContent).split("|");
                document.getElementById("hi").value = id;
                document.getElementById("ht").textContent = 'Apakah anda yakin ingin menghapus about"'+data[0]+'"?';
              }
            </script>
