
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><i class="fa fa-edit"></i> Edit Password</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
                                <li class="breadcrumb-item active">Edit Password</li>
                            </ol>
                            <button type="button" class="btn btn-warning d-none d-lg-block m-l-15" onclick="window.history.back()">
                                <i class="fa fa-arrow-circle-left"></i> Kembali
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="border:1px solid darkgray;">
                            <div class="card-body">
                                <h2 class="card-title" style="padding:50px 0px 10px 50px; color:steelblue;">Form Ubah Password</h2>
                                <br>
                                <!--form-->
                                <form method="post" class="form-horizontal form-material">
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                        <h4 class="col-md-3">Password Lama</h4>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" name="pl" required style="border:1px solid dimgray;">
                                            <?php
                                              if (!empty($passl)&&$passl=="salah") { ?>
                                                <p class="text-danger">Password lama salah!</p>
                                              <?php } 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                        <h4 class="col-md-3">Password Baru</h4>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" name="pb" required style="border:1px solid dimgray;">
                                            <?php
                                              if (!empty($passb)&&$passb=="sama") { ?>
                                                <p class="text-danger">Password baru tidak boleh sama dengan password lama!</p>
                                              <?php } 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                        <h4 class="col-md-3">Konfirmasi Password Baru</h4>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" name="pk" required style="border:1px solid dimgray;">
                                            <?php
                                              if (!empty($passk)&&$passk=="salah") { ?>
                                                <p class="text-danger">Password konfirmasi salah!</p>
                                              <?php }
                                            ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <button class="btn btn-danger float-right" style="margin-bottom:50px;" type="submit" name="submit-password">
                                                <i class="fa fa-send"></i> Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>