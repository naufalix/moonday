<?php
    require("admin/models/about.php");
    $about = new about();
  
    $data_about = $about->tampil();
?>