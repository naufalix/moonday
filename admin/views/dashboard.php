            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 mx-auto">
                        <div class="card">
                            <div class="d-flex no-block p-15 m-3 align-items-center">
                                <div class="round round-info"><i class="fa fa-coffee font-20"></i></div>
                                <div class="m-l-10 ">
                                    <h6 class="text-muted font-light m-b-0">Total Menu</h6>
                                    <h3 class="m-b-0"><?= count($menu->tampil()) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <div class="card">
                            <div class="d-flex no-block p-15 m-3 align-items-center">
                                <div class="round round-primary"><i class="fa fa-smile-o font-20"></i></div>
                                <div class="m-l-10 ">
                                    <h6 class="text-muted font-light m-b-0">Total Promo</h6>
                                    <h3 class="m-b-0"><?= count($promo->tampil()) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <div class="card">
                            <div class="d-flex no-block p-15 m-3 align-items-center">
                                <div class="round round-danger"><i class="fa fa-globe font-20"></i></div>
                                <div class="m-l-10 ">
                                    <h6 class="text-muted font-light m-b-0">Total Store</h6>
                                    <h3 class="m-b-0"><?= count($store->tampil()) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <div class="card">
                            <div class="d-flex no-block p-15 m-3 align-items-center">
                                <div class="round round-success"><i class="fa fa-user font-20"></i></div>
                                <div class="m-l-10 ">
                                    <h6 class="text-muted font-light m-b-0">Total User</h6>
                                    <h3 class="m-b-0"><?= count($user->tampil()) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>