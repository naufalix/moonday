<?php
class menu{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$deskripsi,$id_varian)
    {
        $insert = $this->db->prepare('INSERT INTO menu (nama,deskripsi,id_varian) VALUES (?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $deskripsi);
        $insert->bindParam(3, $id_varian);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `menu`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_menu,$nama,$deskripsi,$id_varian){
        $update = $this->db->prepare('UPDATE menu SET nama=?, deskripsi=?, id_varian=? WHERE `id_menu`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $deskripsi);
        $update->bindParam(3, $id_varian);
        $update->bindParam(4, $id_menu);
        $update->execute();
        return $update;
    }

    public function foto($id_menu,$foto){
        $update = $this->db->prepare('UPDATE menu SET foto=? WHERE `id_menu`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_menu);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_menu)
    {
        $delete = $this->db->prepare("DELETE FROM menu WHERE `id_menu`=?"); 
        $delete->bindParam(1, $id_menu); 
        $delete->execute();
        return $delete;
    }
}
?>
