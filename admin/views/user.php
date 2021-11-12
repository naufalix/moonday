
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

                            <div class="col-sm-12">
                                <div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>
                            </div>

                                <h4 class="card-title float-left" style="margin:20px;">Daftar User</h4>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <a href="index.php?page=tambahuser">
                                        <button class="btn btn-danger float-right" style="margin-bottom:30px;">
                                        <i class="fa fa-plus"></i> Tambah User</button></a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>James</td>
                                                <td>james_1</td>
                                                <td>admin</td>
                                                <td align="center">
                                                <a href="index.php?page=edituser" class="btn btn-s btn-info" title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a href="index.php?page=detailuser" class="btn btn-s btn-info" title="Detail"><i class="ti-eye"></i></a>
                                                <a href="javascript:if(confirm('Anda yakin ingin menghapus data?')) 
                                                window.location.href =''"
                                                class="btn btn-s btn-warning"><i class="ti-trash"
                                                title="Hapus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mary</td>
                                                <td>Mary21</td>
                                                <td>superadmin</td>
                                                <td align="center">
                                                <a href="index.php?page=edituser" class="btn btn-s btn-info" title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a href="index.php?page=detailuser" class="btn btn-s btn-info" title="Detail"><i class="ti-eye"></i></a>
                                                <a href="javascript:if(confirm('Anda yakin ingin menghapus data?')) 
                                                window.location.href =''"
                                                class="btn btn-s btn-warning"><i class="ti-trash"
                                                title="Hapus"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>