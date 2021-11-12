<?php
//require "database.php";
 
class penerbit{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($penerbit, $alamat)
    {
        $insert = $this->db->prepare('INSERT INTO `penerbit` (`penerbit`,`alamat`) VALUES (?, ?)');
        $insert->bindParam(1, $penerbit);
        $insert->bindParam(2, $alamat);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT `id_penerbit`,`penerbit`,`alamat` FROM `penerbit` ORDER BY `penerbit`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function tampil_id($id_penerbit){
        $show = $this->db->prepare("SELECT `penerbit`,`alamat` FROM `penerbit` where `id_penerbit`=?");
        $show->bindParam(1, $id_penerbit);
        $show->execute();
        return $show->fetch();
    }
 
    public function ubah($id_penerbit,$penerbit,$alamat){
        $update = $this->db->prepare('UPDATE `penerbit` set `penerbit`=?,`alamat`=? where `id_penerbit`=?');
        $update->bindParam(1, $penerbit);
        $update->bindParam(2, $alamat);
        $update->bindParam(3, $id_penerbit);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_penerbit)
    {
        $delete = $this->db->prepare("DELETE FROM `penerbit` where `id_penerbit`=?"); 
        $delete->bindParam(1, $id_penerbit); 
        $delete->execute();
        return $delete;
    }
}
?>