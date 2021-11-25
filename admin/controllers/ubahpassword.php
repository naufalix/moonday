<?php
  if (isset($_POST["submit-password"])) {
    if (!empty($_POST["pl"])&&!empty($_POST["pb"])&&!empty($_POST["pk"])) {
    	$i = $_SESSION['id'];
      $pl = MD5($_POST['pl']);
      $pb = MD5($_POST['pb']); 
      $pk = MD5($_POST['pk']); 

      //get password 
      $p = $user->tampil_id($i)["password"];

      if ($pl!=$p){$passl="salah";}
      if ($pb==$p){$passb="sama";}
      if ($pb!=$pk){$passk="salah";}
      if (empty($passl)&&empty($passb)&&empty($passk)) {
        //echo "pass  = ".$pass."<br>passl = ".$passl."<br>passb = ".$passb."<br>passk = ".$passk."<br>";
        $password = $pb;
        $user->password($i,$password);
        $success="Password berhasil diedit";
      } else {$error="Password gagal diedit";}
    } else {$error="Harap isi semua kolom";}
  }
?>