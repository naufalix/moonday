<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand">
                <!-- Logo icon --><b>
                    <img src="assets/images/logo.png" alt="homepage" class="dark-logo" />
                </b>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <i class="fa fa-search"></i>
                    </a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn"><i class="fa fa-times"></i></a>
                    </form>
                </li> -->
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item hidden-sm-up">
                    <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/<?= $foto ?>" alt="user" class="img-circle img-profil" width="30" height="30">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class="">
                                <img src="assets/images/users/<?= $foto ?>" alt="user" class="img-circle img-profil" width="60" height="60">
                            </div>
                            <div class="m-l-10">
                                <h4 class="m-b-0"><?= $nama ?></h4>
                                <p class=" m-b-0">username : <?= $username ?></p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profil"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                        <a class="dropdown-item" href="ubahpassword"><i class="ti-settings m-r-5 m-l-5"></i> Change Password</a>
                        <div class="dropdown-divider"></div>
                        <div class="p-l-30 p-10"><a href="logout" class="btn btn-sm btn-danger btn-rounded"><i class="fa fa-power"></i>Log out</a></div>
                    </div>
                </li>
                <li style="width:15px"></li>
            </ul>
        </div>
    </nav>
</header>