<?php
class user{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$username,$password,$level)
    {
        $insert = $this->db->prepare('INSERT INTO user (nama,username,password,level) VALUES (?,?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $username);
        $insert->bindParam(3, $password);
        $insert->bindParam(4, $level);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM user ORDER BY id_user");
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

    public function cek_username($username){
        $show = $this->db->prepare("SELECT * FROM user WHERE username = ?");
        $show->bindParam(1, $username);
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
 
    public function ubah($id_user,$nama,$username,$level){
        $update = $this->db->prepare('UPDATE user SET nama=?, username=?, level=? WHERE `id_user`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $username);
        $update->bindParam(3, $level);
        $update->bindParam(4, $id_user);
        $update->execute();
        return $update;
    }

    public function foto($id_user,$foto){
        $update = $this->db->prepare('UPDATE user SET foto=? WHERE `id_user`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_user);
        $update->execute();
        return $update;
    }

    public function password($id_user,$password){
        $update = $this->db->prepare('UPDATE user SET password=? WHERE `id_user`=?');
        $update->bindParam(1, $password);
        $update->bindParam(2, $id_user);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_user)
    {
        $delete = $this->db->prepare("DELETE FROM user WHERE `id_user`=?"); 
        $delete->bindParam(1, $id_user); 
        $delete->execute();
        return $delete;
    }
}
?>