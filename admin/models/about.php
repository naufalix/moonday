<?php
class about{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($judul,$deskripsi)
    {
        $insert = $this->db->prepare('INSERT INTO about (judul,deskripsi) VALUES (?,?)');
        $insert->bindParam(1, $judul);
        $insert->bindParam(2, $deskripsi);
        $insert->execute();
        return $insert;
    }
    public function tampil_id($id_about){
        $show = $this->db->prepare("SELECT * FROM about WHERE id_about = ?");
        $show->bindParam(1, $id_about);
        $show->execute();
        return $show->fetch();
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `about`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_about,$judul,$deskripsi){
        $update = $this->db->prepare('UPDATE about SET judul=?, deskripsi=? WHERE `id_about`=?');
        $update->bindParam(1, $judul);
        $update->bindParam(2, $deskripsi);
        $update->bindParam(3, $id_about);
        $update->execute();
        return $update;
    }

    public function foto($id_about,$foto){
        $update = $this->db->prepare('UPDATE about SET foto=? WHERE `id_about`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_about);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_about)
    {
        $delete = $this->db->prepare("DELETE FROM about WHERE `id_about`=?"); 
        $delete->bindParam(1, $id_about); 
        $delete->execute();
        return $delete;
    }
}
?>
