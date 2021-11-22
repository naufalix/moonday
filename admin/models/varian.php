<?php
class varian{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($varian)
    {
        $insert = $this->db->prepare('INSERT INTO varian (varian) VALUES (?)');
        $insert->bindParam(1, $varian);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM varian ORDER BY id_varian");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }

    public function ubah($id_varian,$varian){
        $update = $this->db->prepare('UPDATE varian SET varian=? WHERE `id_varian`=?');
        $update->bindParam(1, $varian);
        $update->bindParam(2, $id_varian);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_varian)
    {
        $delete = $this->db->prepare("DELETE FROM varian WHERE `id_varian`=?"); 
        $delete->bindParam(1, $id_varian); 
        $delete->execute();
        return $delete;
    }
}
?>