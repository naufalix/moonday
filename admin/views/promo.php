
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Data Promo</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Data Promo</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title float-left" style="margin:20px;">Daftar Promo</h4>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#tambah" style="margin-bottom:30px;">
                                            <i class="fa fa-plus-circle"></i> Tambah Promo
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th style="min-width: 200px;">Nama</th>
                                                <th style="min-width: 150px; width: 100%;">Menu</th>
                                                <th style="min-width: 150px;">Start Date</th>
                                                <th style="min-width: 150px;">End Date</th>
                                                <th style="min-width: 110px;"><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach($data_promo as $row) {
                                                    $id_promo = $row['id_promo'];
                                                    $nama     = $row['nama'];
                                                    $id_menu  = $row['id_menu'];
                                                    $start    = $row['start'];
                                                    $end      = $row['end'];
                                                    $foto     = $row['foto'];
                                                    if (empty($foto)) {$foto="default.png";}
                                                    $nm       = $menu->tampil_id($id_menu)["nama"]
                                            ?>
                                            <tr>
                                                <td class="text-center"><?= $no ?></td>
                                                <td>
                                                    <img src="../assets/images/promo/<?= $foto ?>" height="30" width="30" class="mr-2" style="object-fit: cover">
                                                    <?= $nama ?>
                                                </td>
                                                <td><?= $nm ?></td>
                                                <td><?= date_format(date_create($start),"d F Y H:i"); ?></td>
                                                <td><?= date_format(date_create($end),"d F Y H:i"); ?></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-s btn-info" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id_promo ?>)"><i class="fa fa-pencil"></i></button>
                                                    <p id="<?= $id_promo ?>" class="d-none"><?php echo $nama.'|'.$id_menu.'|'.$end ?></p>
                                                    <button type="button" class="btn btn-s btn-info" title="Edit foto" data-toggle="modal" data-target="#foto" onclick="foto(<?= $id_promo ?>)"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-s btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id_promo ?>)"><i class="fa fa-trash"></i></button>
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
                            <h4 class="modal-title">Form tambah Promo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                          <form class="forms-sample" method="post">
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-6 p-0 pr-2">
                                  <label for="nama">Nama Promo</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama promo..." required>
                                </div>
                                <div class="col-6 p-0">
                                  <label for="Menu">Menu</label>
                                  <select class="form-control" id="id_menu" name="id_menu">
                                    <?php 
                                        foreach($data_menu as $row) {
                                            $im = $row['id_menu'];
                                            $nm = $row['nama'];
                                    ?>
                                    <option value="<?= $im ?>"><?= $nm ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-6 p-0 pr-2">
                                    <label for="start">Start Date</label>
                                    <input type="datetime-local" class="form-control" id="start" name="start" placeholder="Start Date..." required>
                                </div>
                                <div class="col-6 p-0">
                                    <label for="end">End Date</label>
                                    <input type="datetime-local" class="form-control" id="end" name="end" placeholder="End Date..." required>
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
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Form Edit Promo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                          <form class="forms-sample" method="post">
                            <input type="hidden" class="d-none" id="ei" name="id_promo">
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-6 p-0 pr-2">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="en" name="nama" placeholder="Nama..." required>
                                </div>
                                <div class="col-6 p-0">
                                  <label for="menu">Menu</label>
                                  <select class="form-control" name="id_menu">
                                    <?php 
                                        foreach($data_menu as $row) {
                                            $im = $row['id_menu'];
                                            $nm = $row['nama'];
                                    ?>
                                    <option class="ev" value="<?= $im ?>"><?= $nm ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-6 p-0 pr-2">
                                    <label for="start">Start Date</label>
                                    <input type="datetime-local" class="form-control" id="start" name="start" placeholder="Start Date..." required>
                                </div>
                                <div class="col-6 p-0">
                                    <label for="end">End Date</label>
                                    <input type="datetime-local" class="form-control" id="end" name="end" placeholder="End Date..." required>
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
                                <input type="hidden" class="d-none" id="fi" name="id_promo" required>
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
                            <h4 class="modal-title">Hapus Promo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                              <div class="form-group">
                                <p id="ht">Apakah anda yakin ingin menghapus Promo ini?</p>
                                <input type="hidden" class="d-none" class="form-control" id="hi" name="id_promo" value="" required>
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
                document.getElementById("ed").value = data[2];
                for (var i = 0; i < document.getElementsByClassName("ev").length ; i++) {
                  if (document.getElementsByClassName("ev")[i].value==data[1]) {
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
                document.getElementById("ht").textContent = 'Apakah anda yakin ingin menghapus promo "'+data[0]+'"?';
              }
            </script>
