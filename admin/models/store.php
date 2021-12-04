<?php
class store{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$alamat,$id_kota,$lokasi)
    {
        $insert = $this->db->prepare('INSERT INTO `store` (`nama`,`alamat`,`id_kota`,`lokasi`) VALUES (?,?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $alamat);
        $insert->bindParam(3, $id_kota);
        $insert->bindParam(4, $lokasi);
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
 
    public function ubah($id_store,$nama,$alamat,$id_kota,$lokasi){
        $update = $this->db->prepare('UPDATE `store` SET `nama`=?, `alamat`=?, `id_kota`=?, `lokasi`=? WHERE `id_store`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $alamat);
        $update->bindParam(3, $id_kota);
        $update->bindParam(4, $lokasi);
        $update->bindParam(5, $id_store);
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
