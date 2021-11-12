
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><i class="fa fa-edit"></i> Edit Promo</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Promo</a></li>
                                <li class="breadcrumb-item active">Edit Promo</li>
                            </ol>
                            <a href="promo.php">
                            <button type="button" class="btn btn-warning d-none d-lg-block m-l-15">
                                <i class="fa fa-arrow-circle-left"></i> Kembali</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="border:1px solid darkgray;">
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger" role="alert">Maaf nama wajib di isi</div>
                                </div>
                                <h2 class="card-title" style="padding:50px 0px 10px 50px; color:steelblue;">Form Edit Promo</h2>
                                <br>

                                <!--form-->
                                <form action="konfirmasieditpromo.php" method="post" class="form-horizontal form-material">
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                    <h4 class="col-md-3">Nama</h4>
                                        <div class="col-md-8" style="border:1px solid dimgray;">
                                            <input type="text" name="nama" value="Monday Madness"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                    <h4 class="col-md-3">Menu</h4>
                                        <div class="col-md-8">
                                            <input type="checkbox" name="menu[]"> Matcha Latte </br>
                                            <input type="checkbox" name="menu[]"> Brow Sugar Boba Milk Tea </br>
                                            <input type="checkbox" name="menu[]"> Americano </br>
                                            <input type="checkbox" name="menu[]"> Caramel Latte </br>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                    <h4 class="col-md-3">End Date</h4>
                                        <div class="col-md-8" style="border:1px solid dimgray;">
                                            <input type="text" name="enddate" value="31 November 2021"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding:0px 50px 0px 50px;">
                                    <h4 class="col-md-3">Foto</h4>
                                        <div class="col-md-8" style="border:1px solid dimgray;">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="cover" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div> 
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <button class="btn btn-danger float-right" style="margin-bottom:50px;"type="submit" name="simpan" 
                                            value="simpan"><i class="fa fa-send"></i> Simpan</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>