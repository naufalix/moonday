<?php
require("admin/models/promo.php");
require("admin/models/menu.php");
$promo = new promo();
$menu = new menu();

$data_promo = $promo->tampil();

?>
