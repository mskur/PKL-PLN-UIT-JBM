<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {
    
    public function getInventory(){
        // $query = $this->db->query("SELECT * FROM inventory");
        // return $query->result();
        //JOIN UPT
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('upt', 'upt.idUPT = inventory.idUPT');
        $query = $this->db->get();
        return $query->result();
    }

    public function addInventory($data){
        $this->db->insert('inventory', $data);
    }

    public function getInventoryDetail($idBarang){
        // $this->db->where('idBarang', $idBarang);
        // $query = $this->db->get('inventory');
        // return $query->row();
        //JOIN UPT
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('upt', 'upt.idUPT = inventory.idUPT');
        $this->db->where('idBarang', $idBarang);
        $query = $this->db->get();
        return $query->row();
    }

    public function updateInventory($idBarang, $data){
        $this->db->where('idBarang', $idBarang);
        $this->db->update('inventory', $data);
    }

    public function deleteInventory($idBarang){
        $this->db->where('idBarang', $idBarang);
        $this->db->delete('inventory');
    }

    public function getKontakDetail($idKontak){
        $this->db->where('idKontak', $idKontak);
        $query = $this->db->get('kontak');
        return $query->row();
    }

    public function updateKontak($idKontak, $data){
        $this->db->where('idKontak', $idKontak);
        $this->db->update('kontak', $data);
    }

    public function getUPT(){
        $query = $this->db->query("SELECT * FROM upt");
        return $query->result();
    }

    public function getAplikasi(){
        $query = $this->db->query("SELECT * FROM aplikasi");
        return $query->result();
    }

    public function addAplikasi($data){
        $this->db->insert('aplikasi', $data);
    }

    public function getAplikasiDetail($idAplikasi){
        $this->db->where('idAplikasi', $idAplikasi);
        $query = $this->db->get('aplikasi');
        return $query->row();
    }

    public function updateAplikasi($idAplikasi, $data){
        $this->db->where('idAplikasi', $idAplikasi);
        $this->db->update('aplikasi', $data);
    }

    public function deleteAplikasi($idAplikasi){
        $this->db->where('idAplikasi', $idAplikasi);
        $this->db->delete('aplikasi');
    }

    //Media
    public function getMedia(){
        $query = $this->db->query("SELECT * FROM media");
        return $query->result();
    }

    public function addMedia($data){
        $this->db->insert('media', $data);
    }

    public function getMediaDetail($idMedia){
        $this->db->where('idMedia', $idMedia);
        $query = $this->db->get('media');
        return $query->row();
    }

    public function updateMedia($idMedia, $data){
        $this->db->where('idMedia', $idMedia);
        $this->db->update('media', $data);
    }

    public function deleteMedia($idMedia){
        $this->db->where('idMedia', $idMedia);
        $this->db->delete('media');
    }

    public function getLightBoxDetail($idLightBox){
        $this->db->where('idLightBox', $idLightBox);
        $query = $this->db->get('lightbox');
        return $query->row();
    }

    public function updateLightBox($idLightBox, $data){
        $this->db->where('idLightBox', $idLightBox);
        $this->db->update('lightbox', $data);
    }

    public function getAdmin(){
        $query = $this->db->query("SELECT * FROM admin");
        return $query->result();
    }

    public function addAdmin($data){
        $this->db->insert('admin', $data);
    }

    public function getAdminDetail($username){
        $this->db->where('username', $username);
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function updateAdmin($username, $data){
        $this->db->where('username', $username);
        $this->db->update('admin', $data);
    }

    public function deleteAdmin($username){
        $this->db->where('username', $username);
        $this->db->delete('admin');
    }

}