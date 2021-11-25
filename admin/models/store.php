<?php
class store{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$id_kota,$lokasi)
    {
        $insert = $this->db->prepare('INSERT INTO store (nama,id_kota,lokasi) VALUES (?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $id_kota);
        $insert->bindParam(3, $lokasi);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `store`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_store,$nama,$id_kota,$lokasi){
        $update = $this->db->prepare('UPDATE store SET nama=?, id_kota=?, lokasi=? WHERE `id_store`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $id_kota);
        $update->bindParam(3, $lokasi);
        $update->bindParam(4, $id_store);
        $update->execute();
        return $update;
    }

    public function hapus($id_store)
    {
        $delete = $this->db->prepare("DELETE FROM store WHERE `id_store`=?"); 
        $delete->bindParam(1, $id_store); 
        $delete->execute();
        return $delete;
    }
}
?>
