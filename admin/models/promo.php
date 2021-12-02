<?php
class promo{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$id_menu,$end)
    {
        $insert = $this->db->prepare('INSERT INTO promo (nama,id_menu,end) VALUES (?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $id_menu);
        $insert->bindParam(3, $end);
        $insert->execute();
        return $insert;
    }
    
    public function tampil_id($id_promo){
        $show = $this->db->prepare("SELECT * FROM promo WHERE id_promo = ?");
        $show->bindParam(1, $id_promo);
        $show->execute();
        return $show->fetch();
    }

    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `promo`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_promo,$nama,$id_menu,$end){
        $update = $this->db->prepare('UPDATE promo SET nama=?, id_menu=?, end =? WHERE `id_promo`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $id_menu);
        $update->bindParam(3, $end);
        $update->bindParam(4, $id_promo);
        $update->execute();
        return $update;
    }

    public function foto($id_promo,$foto){
        $update = $this->db->prepare('UPDATE promo SET foto=? WHERE `id_promo`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_promo);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_promo)
    {
        $delete = $this->db->prepare("DELETE FROM promo WHERE `id_promo`=?"); 
        $delete->bindParam(1, $id_promo); 
        $delete->execute();
        return $delete;
    }
}
?>
