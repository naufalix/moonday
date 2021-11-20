<?php
//require "database.php";
 
class user{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
     public function tambah($nama, $username, $level)
    {
        $insert = $this->db->prepare('INSERT INTO `user` (`nama`,`username`,`level`) VALUES (?, ?, ?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $username);
        $insert->bindParam(3, $level);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT `id_user`,`nama`,`username`,`level` FROM `user` ORDER BY `user`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
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
 
    public function ubah($id_user,$nama,$username, $level){
        $update = $this->db->prepare('UPDATE `user` set `nama`=?,`username`=?, `level`=? where `id_user`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $username);
        $update->bindParam(3, $level);
        $update->bindParam(3, $id_user);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_user)
    {
        $delete = $this->db->prepare("DELETE FROM `user` where `id_user`=?"); 
        $delete->bindParam(1, $id_user); 
        $delete->execute();
        return $delete;
    }
}
?>
