<?php

    class kota {
        private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }

    public function tampil(){
        $data = $this->db->prepare('SELECT * FROM `kota` ORDER BY `id_kota`');
        $data->execute();
        $show = $data->fetchAll();
        return $show;
    }

    public function tampil_id($id_kota){
        $show = $this->db->prepare("SELECT * FROM kota WHERE id_kota = ?");
        $show->bindParam(1, $id_kota);
        $show->execute();
        return $show->fetch();
    }

    public function tambah($kota){
        $insert = $this->db->prepare('INSERT INTO `kota` (`kota`) VALUES (?)');
        $insert->bindParam(1, $kota);
        $insert->execute();
        return $insert;
    }

    public function edit($kota, $id){
        $update = $this->db->prepare('UPDATE `kota` set `kota`=? where `id_kota` = ?');
        $update->bindParam(1, $kota);
        $update->bindParam(2, $id);
        $update->execute();
        return $update;
    }

    public function hapus($id){
        $delete = $this->db->prepare('DELETE FROM `kota` where `id_kota` = ?');
        $delete->bindParam(1, $id);
        $delete->execute();
        return $delete;
    }

    }
