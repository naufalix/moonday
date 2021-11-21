
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Data User</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Data User</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title float-left" style="margin:20px;">Daftar User</h4>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#tambah" style="margin-bottom:30px;">
                                            <i class="fa fa-plus-circle"></i> Tambah User
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th style="width: 100%;">Nama</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th style="min-width: 110px;"><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach($data_user as $row) {
                                                    $id_user    = $row['id_user'];
                                                    $nama       = $row['nama'];
                                                    $username   = $row['username'];
                                                    $level      = $row['level'];
                                                    $foto       = $row['foto'];
                                                    if (empty($foto)) {$foto="default.png";}
                                            ?>
                                            <tr>
                                                <td class="text-center"><?= $no ?></td>
                                               <!--  <td><?= $nama ?></td> -->
                                                <td>
                                                    <img src="assets/images/users/<?= $foto ?>" alt="user" height="30" width="30" class="rounded-circle mr-2" style="object-fit: cover">
                                                    <?= $nama ?>
                                                </td>
                                                <td><?= $username ?></td>
                                                <td><span class="label label-success"><?= $level ?></span></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-s btn-info" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id_user ?>)"><i class="fa fa-pencil"></i></button>
                                                    <p id="<?= $id_user ?>" class="d-none"><?php echo $nama.'|'.$username.'|'.$level ?></p>
                                                    <button type="button" class="btn btn-s btn-info" title="Edit foto" data-toggle="modal" data-target="#foto" onclick="foto(<?= $id_user ?>)"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-s btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id_user ?>)"><i class="fa fa-trash"></i></button>
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
                            <h4 class="modal-title">Form tambah user</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-7 p-0 pr-2">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama..." required>
                                </div>
                                <div class="col-5 p-0 pr-2">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username..." required>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row m-0">
                                <div class="col-6 p-0 pr-2">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password..." minlength="5" required>
                                </div>
                                <div class="col-6 p-0 pr-2">
                                  <label for="level">Level</label>
                                  <select class="form-control" id="level" name="level">
                                    <option value="admin">Admin</option>
                                    <option value="superadmin">Superadmin</option>
                                  </select>
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
                            <h4 class="modal-title">Form edit user</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                                <input type="hidden" class="d-none" id="ei" name="id_user">
                                <div class="form-group">
                                  <div class="row m-0">
                                    <div class="col-7 p-0 pr-2">
                                      <label for="nama">Nama</label>
                                      <input type="text" class="form-control" id="en" name="nama" placeholder="Nama..." required>
                                    </div>
                                    <div class="col-5 p-0 pr-2">
                                      <label for="username">Username</label>
                                      <input type="text" class="form-control" id="eu" name="username" placeholder="Username..." required>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row m-0">
                                    <div class="col-6 p-0 pr-2">
                                      <label for="password">Password</label>
                                      <input type="password" class="form-control" id="ep" name="password">
                                      <label class="text-danger">*kosongkan jika tidak ingin mengubah password</label>
                                    </div>
                                    <div class="col-6 p-0 pr-2">
                                      <label for="level">Level</label>
                                      <select class="form-control" id="el" name="level">
                                        <option class="el" value="admin">Admin</option>
                                        <option class="el" value="superadmin">Superadmin</option>
                                      </select>
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
                                <input type="hidden" class="d-none" id="fi" name="id_user" required>
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
                            <h4 class="modal-title">Hapus user</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                              <div class="form-group">
                                <p id="ht">Apakah anda yakin ingin menghapus user ini?</p>
                                <input type="hidden" class="d-none" class="form-control" id="hi" name="id_user" value="" required>
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
                document.getElementById("eu").value = data[1];
                for (var i = 0; i < document.getElementsByClassName("el").length ; i++) {
                  if (document.getElementsByClassName("el")[i].value==data[2]) {
                    document.getElementsByClassName("el")[i].selected = "true";
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
                document.getElementById("ht").textContent = 'Apakah anda yakin ingin menghapus "'+data[0]+'"?';
              }
            </script>