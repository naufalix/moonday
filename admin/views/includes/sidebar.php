<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="assets/images/icon1.png" alt="elegant admin template"></span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> 
                    <a class="waves-effect waves-dark" href="index.php?page=profil" aria-expanded="false">
                    <i class="fa fa-user-circle-o"></i><span class="hide-menu">Profil</span></a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="index.php?page=menu" aria-expanded="false">
                    <i class="fa fa-coffee"></i><span class="hide-menu"></span>Menu</a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="index.php?page=promo" aria-expanded="false">
                    <i class="fa fa-smile-o"></i><span class="hide-menu"></span>Promo</a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="index.php?page=store" aria-expanded="false">
                    <i class="fa fa-globe"></i><span class="hide-menu"></span>Store</a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-angle-down"></i>
                        <span class="hide-menu">Data Master</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.php?page=varian">Varian<i class="fa fa-leaf"></i></a></li>
                        <li><a href="index.php?page=kota">Kota<i class="fa fa-map-marker"></i></a></li>
                    </ul>
                </li>
                <?php if ($level=="superadmin") { ?>
                <li> 
                    <a class="waves-effect waves-dark" href="index.php?page=user" aria-expanded="false">
                    <i class="fa fa-cog"></i><span class="hide-menu"></span>Pengaturan User</a>
                </li>
                <?php } ?>
                <div class="text-center m-t-30">
                    <a href="index.php?page=logout" class="btn waves-effect waves-light btn-success hidden-md-down"> Sign out</a>
                </div>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>