<?php
//require "database.php";
 
class user{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    // public function tambah($penerbit, $alamat)
    // {
    //     $insert = $this->db->prepare('INSERT INTO `penerbit` (`penerbit`,`alamat`) VALUES (?, ?)');
    //     $insert->bindParam(1, $penerbit);
    //     $insert->bindParam(2, $alamat);
    //     $insert->execute();
    //     return $insert;
    // }
 
    // public function tampil()
    // {
    //     $show = $this->db->prepare("SELECT `id_penerbit`,`penerbit`,`alamat` FROM `penerbit` ORDER BY `penerbit`");
    //     $show->execute();
    //     $data = $show->fetchAll();
    //     return $data;
    // }
 
    public function tampil_id($id_user){
        $show = $this->db->prepare("SELECT * FROM user WHERE id_user = ?");
        $show->bindParam(1, $id_user);
        $show->execute();
        return $show->fetch();
    }

    public function login($username, $password){
        $show = $this->db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        $show->bindParam(1, $username);
        $show->bindParam(2, $password);
        $show->execute();
        return $show->fetch();
    }
 
    // public function ubah($id_penerbit,$penerbit,$alamat){
    //     $update = $this->db->prepare('UPDATE `penerbit` set `penerbit`=?,`alamat`=? where `id_penerbit`=?');
    //     $update->bindParam(1, $penerbit);
    //     $update->bindParam(2, $alamat);
    //     $update->bindParam(3, $id_penerbit);
    //     $update->execute();
    //     return $update;
    // }
 
    // public function hapus($id_penerbit)
    // {
    //     $delete = $this->db->prepare("DELETE FROM `penerbit` where `id_penerbit`=?"); 
    //     $delete->bindParam(1, $id_penerbit); 
    //     $delete->execute();
    //     return $delete;
    // }
}
?>